<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/register.css" />
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/home.data.verify.js"></script>

<title>新会员注册</title>
</head>

<body>
<div id="head"> 此处显示 id "head" 的内容 </div>
<div class="reg-item">
<form action="__URL__/doReg" method="post">
<ol>
<li>
<label for="username">帐户名:</label>
<input id="username" name="User_Name" type="text">
<span id="reg_username" ></span>
</li>
<li>
<label for="pwd">密码:</label>
<input id="pwd" type="password" name="User_Pwd" >
<span id="reg_pwd" ></span>
</li>
<li>
<label for="pwd2">确认密码:</label>
<input id="pwd2" type="password" name="pwd2">
<span id="reg_pwd2" ></span>
</li>
<li>
<label for="email">邮箱:</label>
<input id="email" type="email" name="User_Email">
<span id="reg_email" ></span>
</li>
<li>
<label for="code">验证码:</label>
<input id="code" type="text" style="width:100px;" name="code">
<img height=33 width=80 src="__APP__/Public/code" onclick='this.src=this.src+"?"+Math.random()'/>
<span id="reg_code" ></span>
</li>
<li>
<input type="image" src="__PUBLIC__/images/reg-button.jpg" class="tijiao" id="reg" disabled="disabled" style="width:154px; height:40px;">
<img  />
</li>
</ol>
</form>
</div>
</body>
</html>