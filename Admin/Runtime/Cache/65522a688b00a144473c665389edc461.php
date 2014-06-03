<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
     <head>
             <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
	         <title>add</title>
             <link rel="stylesheet" href="__PUBLIC__/css/hotnews_1.css" type="text/css" media="screen" />
             <script src="__ROOT__/CKEditor/ckeditor.js"></script>
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
       <center>
	     <nav id="nav">
             <a href="__APP__/Notices/index">浏览商城公告</a> |
             <a href="__APP__/Notices/add">添加商城公告</a>
         </nav>
         <hr>
         </center>


         <form action="__APP__/Notices/insert" method="post" enctype="multipart/form-data" name="form1">
         <fieldset>
             <p>
             <label for="notices_title">公告标题</label>
                 <input type="text" name="notices_title" id="notices_title">
             <br/>
           </p>

             <p>
             <label for="notices_content">公告内容</label>
                  <textarea name="notices_content" id="notices_content"></textarea>
             </p>
             <p>
                 <input type="submit" name="submit" id="submit" value="提交">
                 　<input type="reset" name="reset" id="reset" value="重置">
             </p>
         </fieldset>
       </form>

</div>
</body>
<script type="text/javascript">

   // Ǵԃ CKEitor քʏԫ٦Ŝìʹԃ CKFinder ӥݾ

   CKEDITOR.replace( 'notices_content', {

   filebrowserBrowseUrl : '__ROOT__/CKFinder/ckfinder.html',

   filebrowserImageBrowseUrl : '__ROOT__/CKFinder/ckfinder.html?Type=Images',

   filebrowserFlashBrowseUrl : '__ROOT__/CKFinder/ckfinder.html?Type=Flash',

   filebrowserUploadUrl : '__ROOT__/CKFinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

   filebrowserImageUploadUrl : '__ROOT__/CKFinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

   filebrowserFlashUploadUrl : '__ROOT__/CKFinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'

   });

</script>
</html>