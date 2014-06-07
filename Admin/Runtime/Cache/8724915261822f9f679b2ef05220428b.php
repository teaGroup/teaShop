<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
     <head>
	      <title>添加商品信息</title>
		 <script src="__ROOT__/ckeditor/ckeditor.js"></script>
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
	                       <a href="__APP__/Goodsinfo/index">浏览商品</a> |
	                       <a href="__APP__/Goodsinfo/add">添加商品</a>
	                </nav>
	          <hr>
			</center>
			<div class="content-box"><!-- Start Content Box -->
			<div class="content-box-header">
					
					<h3>商品信息添加</h3>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
		     <div class="content-box-content">
			<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
			<div class="notification attention png_bg"></div>
                     <form action="__APP__/Goodsinfo/insert" method="post" enctype="multipart/form-data" id="form1">
                             <label for="name">商品名称：<input type="text" name="name"/></label><br/>
                             <label for="img">商品图片上传：<input type="file" name="img[]"/></label><br/>
					    <label for="img1">
                             商品图片上传1：<input type="file" name="img1[]"/><br/>
					    商品图片上传2：<input type="file" name="img1[]"/><br/>
					    商品图片上传3：<input type="file" name="img1[]"/><br/></label>
                             <label for="sell">是否上架：<input type="radio" name="sell" value="1" checked>是 <input type="radio" value="0" name="sell"/>否</label><br/>
                             <label for="num">库存：&nbsp;&nbsp;<input type="number" name="num"/></label><br/>
                             <label for="price">商品价格：<input type="price" name="price"/></label><br/>
                             <label for="rewardCred">赠送积分：<input type="number" name="rewardCred"/>分</label><br/>
                             <label for="netContent">净含量：<input type="number" name="netContent"/></label><br/>
                             <label for="classifi">商品分类：<select name="classifi">
		                             <option value="" selected></option>
                                       <?php if(is_array($classifi)): $i = 0; $__LIST__ = $classifi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['Classifi_Name']); ?>"><?php echo ($vo["Classifi_Name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>		
		                   </select></label><br/>
                             <label for="unit">产品单位：
		                             <select name="unit">
		                             <option value="g">g</option>
		                             <option value="kg">kg</option>
		                             </select>
					    </label><br/>
					   <div>
					           <b>商品简介：</b><textarea name="editor1" id="editor1">请输入……</textarea>
					   </div>
                             <input type="submit" class="button" value="提交"/>&nbsp;&nbsp;<input type="reset" class="button" value="重置"/>		
	                </form>
 <script type="text/javascript">

   // Ǵԃ CKEitor քʏԫ٦Ŝìʹԃ CKFinder ӥݾ

   CKEDITOR.replace( 'editor1', {

   filebrowserBrowseUrl : '__ROOT__/ckfinder/ckfinder.html',

   filebrowserImageBrowseUrl : '__ROOT__/ckfinder/ckfinder.html?Type=Images',

   filebrowserFlashBrowseUrl : '__ROOT__/ckfinder/ckfinder.html?Type=Flash',

   filebrowserUploadUrl : '__ROOT__/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',

   filebrowserImageUploadUrl : '__ROOT__/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

   filebrowserFlashUploadUrl : '__ROOT__/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'

   });

</script>
</div>
</div>
</div>
</div>
       </body>
</html>