<?php
/**
  +------------------------------------------------------------------------------
 * SystemController
  +------------------------------------------------------------------------------
 * @author   	赵尊杰<10199720@qq.com>
 * @version  	$Id: SystemController.class.php v001 2016-06-01
 * @description 系统功能
  +------------------------------------------------------------------------------
 */
namespace Home\Controller;
class SystemController extends CommonController {
  
	//生成验证码
	public function getImgCode(){
		ob_clean();
		$code=$this->randStr(4);
		session('imgCode',$code);
		$x_size=60;
		$y_size=18;		
		$aimg = imagecreate($x_size,$y_size);
		$back = imagecolorallocate($aimg,255, 255, 255);
		$border = imagecolorallocate($aimg,204,53,53);
		imagefilledrectangle($aimg, 1, 1, $x_size+1, $y_size+1, $back);
		imagerectangle($aimg,50,50, $x_size, $y_size, $border);
		imageString($aimg,5,5,2, $code,$border); 
		header("Pragma:no-cache");
		header("Cache-control:no-cache");
		header("Content-type: image/png");
		imagepng($aimg);
		imagedestroy($aimg);
	}
	
	//生成随机字符串
	function randStr($len){ 
		$chars = array( 
		"a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "A", "B","D", "E", "F", "G","H","J","L", "M", "N","Q", "R","T", "U","Y", "2","3", "4", "5", "6", "7", "8", "9" 
		); 
		$charsLen = count($chars)-1;  
		shuffle($chars);
		$outStr=''; 
		for ($i=0;$i<$len;$i++){
			$outStr.=$chars[mt_rand(0,$charsLen)]; 
		}
		return $outStr; 
	}
}
?>