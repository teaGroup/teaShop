<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
      <head>
            <title>商品类别管理</title>
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
                     <form action="__APP__/Classifi/insert" method="post">
                           <label for="name" id="one">类别名称：<input type="text" name="name"/></label><br/>
	                      <label for="level" id="two">类别等级：<select name="level" size="1">
	                               <option value="1" selected>1</option>
	                               <option value="2">2</option>
	                               <option value="3">3</option>
	                               <option value="4">4</option>
	                              </select></label><br/>
	                      <label for="p_level" id="three">所属父级别：
	                      <select name="p_level" size="1">
		                 <option value="0" selected>0</option>
	                      <?php if(is_array($list)): foreach($list as $key=>$vo): ?><option value="<?php echo ($vo['pk_Classifi_Id']); ?>"><?php echo ($vo["pk_Classifi_Id"]); ?></option><?php endforeach; endif; ?>
	                      </select></label><br/>
                           <nav id="four"><input type="submit" value="提交"/>&nbsp;&nbsp;<input type="reset" value="重置"/></nav>
                     </form>
                </center>
	      </div>
      </body>
</html>