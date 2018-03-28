<?php
/**
* 	配置账号信息
*/

class WxPayConf_pub
{
	//=======【基本信息设置】=====================================
	//微信公众号身份的唯一标识。审核通过后，在微信发送的邮件中查看
	const APPID = 'wx76ffa4c15fe721bf';
	//受理商ID，身份标识
	const MCHID = '1219437301';
	//商户支付密钥Key。审核通过后，在微信发送的邮件中查看
	const KEY = 'lD40mDhUPD2hdT6dGSgUwRTyNIz6SG9m';
	//JSAPI接口中获取openid，审核后在公众平台开启开发模式后可查看
	const APPSECRET = '329f7fcc56eeba22e2b14f29fdd9e807';
	
	
	//=======【JSAPI路径设置】===================================
	//获取access_token过程中的跳转uri，通过跳转将code传入jsapi支付页面
	//const JS_API_CALL_URL = 'http://test.lishe.cn/business/wshop.php?c=Pay&a=wxpay';
	const JS_API_CALL_URL = 'http://www.lishe.cn/business/wshop.php?c=Pay&a=wxpay';
	
	//=======【证书路径设置】=====================================
	//证书路径,注意应该填写绝对路径
	const SSLCERT_PATH = '';
	const SSLKEY_PATH = '';
	
	//=======【异步通知url设置】===================================
	//异步通知url，商户根据实际开发过程设定
	//const NOTIFY_URL = 'http://test.lishe.cn/business/wshop.php?c=Index&a=asyNotify';
	//const NOTIFY_URL = 'http://test.lishe.cn/business/wshop.php/Index/asyNotify';
	const NOTIFY_URL = 'http://www.lishe.cn/business/wshop.php/Index/asyNotify';
	//=======【curl超时设置】===================================
	//本例程通过curl使用HTTP POST方法，此处可修改其超时时间，默认为30秒
	
	//微送礼充值配置
	//access_token过程中的跳转uri
	const GIFT_JS_API_CALL_URL = 'http://www.lishe.cn/gift.php?c=Pay&a=wxpay';
	//充值异步回调
	const GIFT_NOTIFY_URL = 'http://www.lishe.cn/gift.php?c=Call&a=weixinPayNotify';
	
	
	const CURL_TIMEOUT = 30;
}
	
?>