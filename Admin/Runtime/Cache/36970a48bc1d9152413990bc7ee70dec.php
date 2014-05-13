<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
     <head>
	      <title>商品类别浏览</title>
	</head>
	<body>
         ﻿		 <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/reset.css" />
		 <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css" />
		 <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/invalid.css" />

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
				Welcome, <a href="浏览自己的信息中心" title="Edit your profile">John Doe</a>!
				<br />
				<a href="#" title="View the Site">网站首页</a> | <a href="__APP__/Login/logout" title="Sign Out">注销登录</a>
			</div>
			<ul id="main-nav"> 
				
				<li>
					<a href="__APP__/Index/index/" class="nav-top-item no-submenu">
						修改密码
					</a>       
				</li>
				<li>
					<a href="__APP__/Index/index/" class="nav-top-item no-submenu">
						管理会员信息
					</a>       
				</li>
				
				<li> 
					<a href="#" class="nav-top-item current">
					商品管理
					</a>
					<ul>
						<li><a href="#">商品分类管理</a></li>
						<li><a class="current" href="#">商品信息管理</a></li>
						<li><a href="#">商品订单管理</a></li>
						<li><a href="#">商品评价管理</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						热点新闻管理
					</a>
					<ul>
						<li><a href="#">添加热点新闻</a></li>
						<li><a href="#">浏览热点新闻</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						商城公告管理
					</a>
					<ul>
						<li><a href="#">添加公告</a></li>
						<li><a href="#">浏览公告</a></li>
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						管理业务管理员管理
					</a>
					<ul>
						<li><a href="#">添加业务管理员</a></li>
						<li><a href="#">浏览管理员信息</a></li>
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
	    <div>
           <center>
               <nav id="nav">
                    <a href="__APP__/Classifi/index">浏览商品类别</a> |
                    <a href="__APP__/Classifi/add">添加商品类别</a>
               </nav>
               <hr>
               <table id="table">
                       <tr> 
	                      <th>分类id</th>
	                      <th>类别名称</th>
	                      <th>类别等级</th>
	                      <th>所属父级id</th>
	                      <th>操作</th>
	                 </tr>
	                 <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr align="center">
		                  <td><?php echo ($vo["pk_Classifi_Id"]); ?></td>
		                  <td><?php echo ($vo["Classifi_Name"]); ?></td>
		                  <td><?php echo ($vo["Classifi_Level"]); ?></td>
		                  <td><?php echo ($vo["fk_Classifi_ParentId"]); ?></td>
		                  <td><a href="__APP__/Classifi/del/id/<?php echo ($vo["pk_Classifi_Id"]); ?>">删除</a></td>
		            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
               </table>
              <div id="div"><div id="black"><?php echo ($show); ?></div></div>
           </center>
		 </div>
     </body>
</html>