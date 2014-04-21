<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
      <head>
	      <title>用户登录</title>
		 <link rel="stylesheet" href="__CSS__/reset.css" type="text/css" media="screen" />
		 <link rel="stylesheet" href="__CSS__/style.css" type="text/css" media="screen" />
         <link rel="stylesheet" href="__CSS__/invalid.css" type="text/css" media="screen />
		 
		 <script type="text/javascript" src="__JS__/jquery-1.3.2.min.js"></script>
		 <script type="text/javascript" src="__JS__/simpla.jquery.configuration.js"></script>
		 <script type="text/javascript" src="__JS__/facebox.js"></script>
         <script type="text/javascript" src="__JS__/jquery.wysiwyg.js"></script>
	 </head>
	 <body id="login">
	       <div id="login-wrapper" class="png_bg">
			<div id="login-top">
			
				<h1>管理员登录</h1>
				<!-- Logo (221px width) -->
				<img id="logo" src="__ROOT__/Public/images/logo.png" alt="Simpla Admin logo" />
			</div> <!-- End #logn-top -->
			
			<div id="login-content">
			<form action="index1.html" method="post">
				

					<div>
					<p>
						<label for="Username">Username</label>
						<input class="text-input" type="text" name="Username"/><span>j;ajguygpaupu</span>
					</p>
					<div class="clear"></div>
					<p>
						<label for="password">Password</label>
						<input class="text-input" type="password" name="password" />
                       
					</p>
                    </div>
                    
                    <div style="margin-right:320px;">
					<div class="clear"></div>
					<p id="remember-password">
						<input type="checkbox" name="remember-password"/>Remember me
					</p>
					<div class="clear"></div>
					<p>
						<input class="button" type="submit" value="Sign In" />
					</p>
					</div>
				</form>
			</div><!-- End #login-content -->
			
		</div><!-- End #login-wrapper -->
	 </body>
</html>