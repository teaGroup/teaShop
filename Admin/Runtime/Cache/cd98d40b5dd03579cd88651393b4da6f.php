<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
     <head>
	     <title>商品评价管理</title>
	</head>
	<body>
         ﻿		 <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/reset.css" />
		 <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css" />
		 <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/invalid.css" />
		 <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/public.css" />
		 <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/page.css" />

		 <script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
		 <script type="text/javascript" src="__PUBLIC__/js/simpla.jquery.configuration.js"></script>
		 <script type="text/javascript" src="__PUBLIC__/js/facebox.js"></script>
		 <script type="text/javascript" src="__PUBLIC__/js/jquery.wysiwyg.js"></script>
		 <script type="text/javascript" src="__PUBLIC__/js/jquery.datePicker.js"></script>
		 <script type="text/javascript" src="__PUBLIC__/js/jquery.date.js"></script>
	   <div id="body-wrapper"> 
	          <div id="sidebar"><div id="sidebar-wrapper">
			<h1 id="sidebar-title"><a href="#">Admin Login</a></h1>
			<a href="#"><img id="logo" src="__PUBLIC__/images/logo.png" alt="Simpla Admin logo" /></a>
			<div id="profile-links">
				Welcome, <a href="#" title="Edit your profile"><?php echo ($adminname); ?></a>!
				<br />
				<a href="__ROOT__/index.php/Index/index" title="View the Site">网站首页</a> | <a href="__APP__/Login/logout" title="Sign Out">注销登录</a>
			</div>
			<ul id="main-nav"> 
				
				<li>
					<a href="__APP__/AdminPwd/index" class="nav-top-item no-submenu">
						修改密码
					</a>       
				</li>
				<li>
					<a href="__APP__/Manauser/index" class="nav-top-item no-submenu">
						管理会员信息
					</a>       
				</li>
				
				<li> 
					<a href="__APP__/Goodsinfo/index" class="nav-top-item">
					商品管理
					</a>
					<ul>
						<li><a href="__APP__/Classifi/index">商品分类管理</a></li>
						<li><a href="__APP__/Goodsinfo/index">商品信息管理</a></li>
						<li><a href="__APP__/Order/index">商品订单管理</a></li>
						<li><a href="__APP__/Review/index">商品评价管理</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						热点新闻管理
					</a>
					<ul>
						<li><a href="__APP__/News/add">添加热点新闻</a></li>
						<li><a href="__APP__/News/index">浏览热点新闻</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						商城公告管理
					</a>
					<ul>
						<li><a href="__APP__/Notices/add">添加公告</a></li>
						<li><a href="__APP__/Notices/index">浏览公告</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						管理业务管理员管理
					</a>
					<ul>
						<li><a href="__APP__/ManageAdmin/add">添加业务管理员</a></li>
						<li><a href="__APP__/ManageAdmin/index">浏览管理员信息</a></li>
					</ul>
				</li> 

                    <li>
					<a href="#" class="nav-top-item">
						其他管理
					</a>
					<ul>
						<li><a href="#">用户角色管理</a></li>
						<li><a href="#">权限管理</a></li>
					</ul>
				</li>				
				
			</ul>
		</div></div>
	    <div id="main-content"> 
		<div class="content-box"><!-- Start Content Box -->
				<div class="content-box-header">
					<h3>浏览回复</h3>
					<div class="clear"></div>
				</div> <!-- End .content-box-header -->
				<div class="content-box-content">
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						<div class="notification attention png_bg"></div>	
						<form>
						     <label><span>评价序号：</span><?php echo ($list[0][pk_Review_Id]); ?></label><br/>
						     <label><span>商品名称：</span><?php echo ($list[0][Goods_Name]); ?></label><br/>
						     <label><span>商品图片：</span><img src="<?php echo ($list[0][Goods_img]); ?>" width=50 height=50/></label><br/>
						     <label><span>评价内容：</span><?php echo ($list[0][Revi_Content]); ?></label><br/>
						     <label><span>评价人：</span><?php echo ($list[0][Revi_People]); ?></label><br/>
						     <label><span>评价时间：</span><?php echo ($list[0][Revi_Time]); ?></label><br/>
							<label><span>回复内容：</span><?php echo ($list[0][ReplyRe_Content]); ?></label><br/>
							<label><span>回复时间：</span><?php echo ($list[0][ReplyRe_Time]); ?></label><br/>
						</form>
				     </div>
				</div>
		</div>
		</div>
	</body>
</html>