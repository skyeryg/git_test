<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>礼舍供应商管理后台登陆</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="/Public/js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="/Public/images/login.js"></script>
<script type="text/javascript" src="/Public/layer/layer.js"></script>
<link href="/Public/css/admin_login2.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>礼舍供应商管理后台登陆</h1>

<div class="login" style="margin-top:50px;">
    
    <div class="header">
        <div class="switch" id="switch"><a class="switch_btn_focus" id="switch_qlogin" href="javascript:void(0);" tabindex="7">快速登录</a>
			<div class="switch_bottom" id="switch_bottom" style="position: absolute; width: 64px; left: 0px;"></div>
        </div>
    </div>    
  
    
    <div class="web_qr_login" id="web_qr_login" style="display: block; height: 235px;">    

            <!--登录-->
            <div class="web_login" id="web_login">
               
               
               <div class="login-box">
    
            
			<div class="login_form">
				<form action="" name="loginform" accept-charset="utf-8" id="login_form" class="loginForm" method="post"><input type="hidden" name="did" value="0"/>
               <input type="hidden" name="to" value="log"/>
                <div class="uinArea" id="uinArea">
                <label class="input-tips" for="username">帐号：</label>
                <div class="inputOuter" id="uArea">
                    
                    <input type="text" id="username" name="username" class="inputstyle"/>
                </div>
                </div>
                <div class="pwdArea" id="pwdArea">
               <label class="input-tips" for="password">密码：</label>
               <div class="inputOuter" id="pArea">
                    
                    <input type="password" id="password" name="p" class="inputstyle"/>
                </div>
                </div>
               
                <div style="padding-left:50px;margin-top:20px;"><input type="button" id="login_btn" value="登 录" style="width:150px;" class="button_blue"/></div>
              </form>
           </div>
           
            	</div>
               
            </div>
            <!--登录end-->
  </div>


</div>

</body>

<script>
    $(document).ready(function(){
        $('#login_btn').click(function(){
            var username=$('#username').val();
            var password=$('#password').val();
            var data={
                'username':username,
                'password':password
            };
            $.post('/index.php/Login/check_user',data,function(text){
                var t1=eval(text);
               // alert(t1[0]);
                if(t1[0]>0){
                    layer.msg(t1[1]);
                    window.location.href="/index.php/home";
                }else{
                    layer.msg(t1[1]);
                }
            })
        });
    });



</script>

</html>