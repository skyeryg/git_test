<?php
/**
  +------------------------------------------------------------------------------
 * ReturnController
  +------------------------------------------------------------------------------
 * @author   	赵尊杰 <10199720@qq.com>
 * @version  	$Id: ReturnController.class.php v001 2016-06-02
 * @description 返积分
  +------------------------------------------------------------------------------
 */
namespace Home\Controller;
class ReturnController extends CommonController {
	public function __construct(){
		parent::__construct();
		$this->url='http://www.lishe.cn';
		$this->dActivity=D('Activity');
	}
	
	public function getReturn(){
		header("Content-type:text/html;charset=utf-8");
		$page = isset($_GET['page']) ? $_GET['page'] : 1;
		$url = $this->url."/admin.php/Return/getReturn/?page=".($page+1);
		$pageSize=30;
		$start=($page-1)*$pageSize;
		$limit=$start.','.$pageSize;
		/**
		* 
		* 一、箱包满返积分活动（9月26日—10月8日）
		（1）商品：29609,29642,29648,19102,29649,29653,29656,29660,29659,29658,29657,19056,19058,19073,19224,19091,19099,19101,19078,19170,12131,12130,20945,12165
		（2）规则：
		1、	单笔订单满99元返1000礼舍积分；
		2、	单笔订单满199元返3000礼舍积分；
		3、	单笔订单满299元返5000礼舍积分；
		4、	活动期间可多次参与此活动，且满返积分无使用时间限制；
		5、	满返积分活动仅限购买当前活动页商品；
		6、	活动结束后，确认收货七天后统一返积分；
		* 
		*/
		
		/**
		$comId='1472542918735';
		$aid=14;
		$startDate='1474819200';
		$endDate='1475942400';
		$rule=array(
			array(99,199,10),
			array(199,299,30),
			array(299,1000000,50),
		);
		$itemIds='29609,29642,29648,19102,29649,29653,29656,29660,29659,29658,29657,19056,19058,19073,19224,19091,19099,19101,19078,19170,12131,12130,20945,12165';
		*/
		
		/**
		* 
		* 二、厨具满返积分活动（9月26日—10月8日）
		（1）商品：11481,11500,11488,11484,11479,11473,11472,11471,11469,11467,11464,11459,7142,7130,7148,7131,7144,7141,7126,7143
		（2）规则：
		1、	单笔订单满300元返礼舍积分5000分；
		2、	单笔订单满800元返礼舍积分15000分；
		3、	单笔订单满2000元返礼舍积分45000分；
		4、	活动期间可多次参与此活动，且满返积分无使用时间限制；
		5、	满返积分活动仅限购买当前活动页商品；
		6、	活动结束后，确认收货七天后统一返积分；
		* 
		*/
		/**
		$comId='1472542918735';
		$aid=15;
		$startDate='1474819200';
		$endDate='1475942400';
		$rule=array(
			array(300,800,50),
			array(800,2000,150),
			array(2000,1000000,450),
		);
		$itemIds='11481,11500,11488,11484,11479,11473,11472,11471,11469,11467,11464,11459,7142,7130,7148,7131,7144,7141,7126,7143';
		*/
		
		/**
		* 
		* 三、零食满返积分活动：（9月26日—10月8日）
		（1）商品：
		下午茶专区：
		10797,19965,22787,23073,4406,2482,10788,4413,10851,19962,10892,3522,11282,10851,3321,2482,9407,3611,22449,11318,22790,6846,2011,7453,4367,23038,3827,5898,24358,10075
		进口零食区：
		16150,2981,3119,22427,9964,5760,4493,3766,19366,22872,8195,9436,11015,22464,3638,25600,8380,2409,9535,26905
		坚果专区：
		9994,9413,4091,10041,10099,10829,9172,9473,9999,9582,10066,9959,10150,23121,10780,4750,9721,10150,9959,10066,9534,9715,20366,11154,2749,8172,22419,7253,20327,9984

		（2）规则：
		1、活动页面商品购满199元返1000积分；
		2、活动页面商品购满299元返1500积分；
		3、活动页面商品购满399元返2500积分；
		4、活动期间可多次参与此活动，且满返积分无使用时间限制；
		5、满返积分活动仅限购买当前活动页商品；
		6、活动结束后，确认收货七天后统一返积分； 
		* 
		*/
		
		/**
		* */
		$comId='1472542918735';
		$aid=43;
		$startDate='1496332800';
		$endDate='1497628800';
		$rule=array(
			array(99,158.9,20),
			array(159,198.9,30),
			array(199,1000000,40),
		);
		$itemIds='18053,18079,18077,18171,18164,18161,18159,51055,51031,51028,18058,18035,18067,12577,17903,12591,18133,17927,18162,17895,17925,18075,17923,18094,12592,17904,17907,18055,18033,17918,17919,18036,17909,18020,18131,18073,17921,18066,17957,18177,18011,18065,18110,18132,17930,18108,18165,17929,18095,18166,17940,17916,17961,17998,18029,18061,18109,17962,18070,17999,18100,18044,18153,17952,18101,17938,17960,18072,18125,17897,17963,18017,17905,18023,18104,18107,18178,18009,18102,18103,17944,17920,17928,17956,17936,12578,17946,17958,18038,17894,18018,18040,18062,18019,18060,17943,17947,18064,17945,17997,18014,18016,18052,62297,62298,62300,17901,18027,18173,804,62299,18057,18056,17908,869,17914,909,50571,18013,18043,18078,18012,18096,18015,18160,808,817,834,18049,12589,18002';
		
		
		/**
		* 
		* 四、星河全场满返积分活动（9月22日—10月8日）
		（1）商品：全场商品
		（2）规则：
		1、单笔订单满500元，返礼舍积分3000分
		2、单笔订单满1000元，返礼舍积分8000分

		
		
		
		$comId='1472542918735';
		$aid=17;
		$startDate='1474473600';
		$endDate='1475942400';
		$rule=array(
			array(500,1000,30),
			array(1000,1000000,80),
		);
		$itemIds='';
		* 
		*/
		
		$ret=$this->dActivity->getActivityReturn($comId,$aid,$startDate,$endDate,$rule,$itemIds,$limit);
		if(!empty($ret)){
			echo "处理中...<br />";
			echo "<pre>";
			print_r($ret);
			echo "</pre>";
			sleep(2);
			echo '<script type="text/javascript">window.location.href="'.$url.'"</script>';
		}else{
			echo "处理完毕！";
			exit;
		}		
		
	}
	
	public function checkReturn(){
		header("Content-type:text/html;charset=utf-8");
		$page = isset($_GET['page']) ? $_GET['page'] : 1;
		$url = $this->url."/admin.php/Return/checkReturn/?page=".($page+1);
		$aid=43;
		$ret=$this->dActivity->checkActivityReturn($aid);
		if(!empty($ret)){
			echo "处理中...<br />";
			echo "<pre>";
			print_r($ret);
			echo "</pre>";
			sleep(1);
			echo '<script type="text/javascript">window.location.href="'.$url.'"</script>';
		}else{
			echo "处理完毕！";
			exit;
		}
	}
	
}