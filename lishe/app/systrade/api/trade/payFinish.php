<?php
class systrade_api_trade_payFinish {

    public $apiDescription = "订单支付状态改变";

    public function getParams()
    {
        $return['params'] = array(
            'tid' => ['type'=>'int', 'valid'=>'required', 'default'=>'', 'example'=>'','description'=>'订单id'],
            'payment' => ['type'=>'int', 'valid'=>'required', 'default'=>'', 'example'=>'','description'=>'已支付金额'],
        );
        return $return;
    }

    public function tradePay($params)
    {
        $tid = $params['tid'];
        $objTrade = kernel::single('systrade_data_trade');
        $tradeInfo = $objTrade->getTradeInfo('payment,status,tid,shop_id',['tid'=>$tid]);
        if($tradeInfo['status'] != 'WAIT_BUYER_PAY' )
        {
            logger::info("支付已成功的订单，不需要重复支付");
            return true;
        }

        $objMdlOrder = app::get('systrade')->model('order');
        try{

            foreach($tradeInfo['order'] as $orderkey=>$orderData)
            {
                $this->__minusStore($orderData);
            }

            $tradeData['data']['status']='WAIT_SELLER_SEND_GOODS';
            $tradeData['data']['modified_time']=time();
            $tradeData['data']['pay_time']=time();
            $tradeData['data']['payed_fee'] = $params['payment'];
            $tradeData['filter']['tid'] = $tid;

            logger::info("支付成功，更新主订单".var_export($tradeData,1));
            $result = $objTrade->updateTrade($tradeData);
            if(!$result)
            {
                throw new \LogicException("主订单支付状态更新失败");
            }

            $orders = array(
                'status'=>'WAIT_SELLER_SEND_GOODS',
                'pay_time'=> time(),
            );

            logger::info("支付成功，更新子订单".var_export($orders,1));
            if(!$objMdlOrder->update($orders, array('tid'=>$tid) ) )
            {
                $msg = "子订单支付状态修改失败";
                throw new \LogicException($msg);
            }
        }
        catch(\Exception $e)
        {
            throw $e;
        }

        event::fire('trade.pay', [$tid, $params['payment'], $tradeInfo['shop_id']] );

        return true;
    }

    private function __minusStore($orderData)
    {
        // 处理sku订单冻结
        $params = array(
            'item_id' => $orderData['item_id'],
            'sku_id' => $orderData['sku_id'],
            'quantity' => $orderData['num'],
            'sub_stock' => 0,
            'status' => 'success',
        );
        $isMinus = app::get('systrade')->rpcCall('item.store.minus',$params);
        if( ! $isMinus )
        {
            throw new \LogicException(app::get('systrade')->_('冻结库存失败'));
        }
    }
}


