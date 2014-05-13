<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
     <head>
	      <title>添加商品信息</title>
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
				<a href="__ROOT__/index.php/Index/index" title="View the Site">网站首页</a> | <a href="__APP__/Login/logout" title="Sign Out">注销登录</a>
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
	                       <a href="__APP__/Goodsinfo/index">浏览商品</a> |
	                       <a href="__APP__/Goodsinfo/add">添加商品</a>
	                </nav>
	          <hr>
                     <form action="__APP__/Goodsinfo/insert" method="post" enctype="multipart/form-data" id="form1">
                             <label for="name">商品名称：<input type="text" name="name"/></label><br/>
                             <label for="img" id="img">商品图片上传：<input type="file" name="img"/></label><br/>
                             <label for="sell" id="sell">是否上架：<input type="radio" name="sell" value="1" checked>是 <input type="radio" value="0" name="sell"/>否</label><br/>
                             <label for="num" id="num">库存：&nbsp;&nbsp;<input type="number" name="num"/></label><br/>
                             <label for="sellTime" id="sellTime">上市时间：<input type="date" name="sellTime"/></label><br/>
                             <label for="price">商品价格：<input type="price" name="price"/></label><br/>
                             <label for="rewardCred" id="rewardCred">赠送积分：<input type="number" name="rewardCred"/>分</label><br/>
                             <label for="intro" id="intro">商品简介：<textarea name="intro"></textarea></label><br/>
                             <label for="netContent">净含量：<input type="number" name="netContent"/></label><br/>
                             <label for="classifi" id="classifi">商品分类：<select name="classifi">
		                             <option value="" selected></option>
                                       <?php if(is_array($classifi)): $i = 0; $__LIST__ = $classifi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['Classifi_Name']); ?>"><?php echo ($vo["Classifi_Name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>		
		                   </select></label><br/>
                             <label for="unit" id="unit">产品单位：
		                             <select name="unit">
		                             <option value="g">g</option>
		                             <option value="kg">kg</option>
		                             </select>
					    </label><br/>
                             <input type="submit" value="提交"/>&nbsp;&nbsp;<input type="reset" value="重置"/>		
	                </form>
             </center>
	     </div>
       </body>
</html>