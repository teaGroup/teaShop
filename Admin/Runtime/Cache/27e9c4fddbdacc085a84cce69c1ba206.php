<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>浮生若茶后台</title>

<script charset="utf-8" src='__PUBLIC__/js/jquery.min.js' type='text/javascript'></script>
<script src="__PUBLIC__/js/dataverify.js" type="application/javascript" language="javascript"></script>


<link rel="stylesheet" href="__PUBLIC__/css/style.css" type="text/css" >  

</head>

<body id="login">
	<div id="login-wrapper" class="png_bg">
		<div id="login-top">
			<img id="logo" src="__PUBLIC__/images/logo.png" />
		</div>
		<div id="login-content">
			<form action="__URL__/doLogin" method="post">
			<div><p>
				<label for="username">用户名</label>
				<input id="username" type="text" class="text-input" name="username" required="required">
				<span id="log_username" ></span>
			</p>
			<div class="clear"></div>

			<p>
				<label for="pwd">密&nbsp;&nbsp;&nbsp;码</label>
				<input id="pwd" type="password" class="text-input" name="pwd" required="required">
				<span id="log_pwd" ></span>
			</p>
			<p>
				<label for="code">验证码</label>
				<input id="code" type="text" style="width:70px;" class="text-input" name="code" required="required">
				
			</p></div>
			<div style="margin-right:320px; margin-top:-69px; width:600px;">
				<p id="verify-code">
					<img height=29 width=65 src="__APP__/Public/code" onclick='this.src=this.src+"?"+Math.random()'/>
					<span id="log_code" class="code"></span>
				</p>
				<div class="clear"></div>
			</div>
			<div style="margin-right:320px; margin-top:-5px;">
				<p>
					<input class="button" type="submit" value="登   录"  >
				</p>
			</div>
			</form>
		</div>
</body>
</html>