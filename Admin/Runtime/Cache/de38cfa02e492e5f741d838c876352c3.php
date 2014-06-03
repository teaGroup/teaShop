<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
     <head>
	      <title>会员信息管理</title>
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
					
					<h3>会员信息管理</h3>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				<div class="content-box-content">
				<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						<div class="notification attention png_bg"></div>
       <form action="__APP__/Manauser/search" method="get">
	        <label for="tiaojian">
		          <select name="tiaojian">
				        <option value="User_Name">会员名称</option>
				        <option value="User_Sex">性别</option>
				        <option value="User_LastLogTime">最后登录时间</option>
				        <option value="User_JoinDate">注册时间</option>
				        <option value="UserL_level">等级</option>
				</select>
				<input type="text" name="keyword"/>&nbsp;&nbsp;<input type="submit" class="button" value="搜索"/>
		   </label>
	  </form>
       <table>
	        <tr>
		       <th>会员名称</th>
		       <th>邮箱</th>
		       <th>性别</th>
		       <th>注册时间</th>
		       <th>最后登录时间</th>
		       <th>积分</th>
		       <th>登录次数</th>
		       <th>会员等级</th>
			  <th>操作</th>
		   </tr>
		   <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
		       <td><?php echo ($vo["User_Name"]); ?></td>
		       <td><?php echo ($vo["User_Email"]); ?></td>
		       <td><?php echo ($vo["User_Sex"]); ?></td>
		       <td><?php echo ($vo["User_JoinDate"]); ?></td>
		       <td><?php echo ($vo["User_LastLogTime"]); ?></td>
		       <td><?php echo ($vo["User_Credit"]); ?></td>
			  <td><?php echo ($vo["User_LoginNum"]); ?></td>
		       <td><?php echo ($vo["UserL_level"]); ?></td>
		       <td><a href="__APP__/Manauser/del/id/<?php echo ($vo["pk_User_Id"]); ?>"><img src="__PUBLIC__/images/icons/cross.png" alt="Delete" /></a></td>
		   </tr><?php endforeach; endif; else: echo "" ;endif; ?>
	  </table>
	  <div id="div" align="center"><div id="black"><?php echo ($show); ?></div></div>
	  <div class="clear"></div>
        </div> <!-- End #tab1 -->
					
					        
					
				</div> <!-- End .content-box-content -->
				
			</div>
       </div>
</body>
</html>