<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/css.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/foot_public.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/h_style.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/base.css" />
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/home.data.verify.js"></script>

<title>新会员注册</title>
</head>

<body>
<div id="head"> 
<div class="topbar">
  <div class="topbar2">
    <div class="add_fav"> <a onclick="" href="###">浮生若茶--名牌正品茶叶、茶礼商城！</a> </div>
    <div class="login-info"> <font>欢迎光临！&nbsp;&nbsp;</font> </div>
    <div class="quick-menu2">
      <ul>
        <li><a title="我的帐户" href="__APP__/Index/index">首页</a> </li>
        <li><a title="帮助中心" href="#">帮助中心</a> </li>
      </ul>
    </div>
  </div>
</div>
<div class="top1">
<a href="###" title="浮生若茶-名牌正品茶叶、茶礼商城"><img src="__PUBLIC__/images/logo.jpg" alt="浮生若茶-专业茶叶、茶具网上商城"></a><span style="color:#7D6666; font-size:36px; margin-top:100px;">.账户注册</span>
<hr/>
</div>
</div>
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
<div style="margin-top:135px;">
<div class="foot_safe">
<div class="foot"><a rel="nofollow" href="###" target="_blank">关于我们</a>|<a rel="nofollow" href="###" target="_blank">隐私申明</a>|<a rel="nofollow" href="###" target="_blank">成为供应商</a>|<a href="###" target="_blank">社区</a>|<a href="###" target="_blank">茶叶</a>|<a href="###" target="_blank">博客</a>|<a href="###" target="_blank">友情链接</a>|<a href="###" target="_blank">网站地图</a><br>
  <center>Copyright 2014 - 2015 浮生若茶  中山大学南方学院计算机（1）班出品  All Rights Reserved </center>
</div>
</div>
</body>
</html>