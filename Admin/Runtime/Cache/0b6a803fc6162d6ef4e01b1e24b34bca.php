<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
     <head>
	      <title>商品信息修改</title>
		  <script src="__ROOT__/ckeditor/ckeditor.js"></script>
		 <script language="javascript">
		       window.onload=function(){
			      if(<?php echo ($data["Goods_IsSell"]); ?>==1){
				      document.getElementsByName('sell')[0].checked='checked';
				 }else{
				      document.getElementsByName('sell')[1].checked='checked';
				 }
			  }
		  </script>
		 
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
				Welcome, <a href="#" title="Edit your profile"><?php echo ($adminname); ?></a>!
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
		<div id="main-content"> 
		<center>
                     <nav id="nav">
	                       <a href="__APP__/Goodsinfo/index">浏览商品</a> |
	                       <a href="__APP__/Goodsinfo/add">添加商品</a>
	                </nav>
				 </center>
	          <hr>
		</center>
		<div class="content-box"><!-- Start Content Box -->
		<div class="content-box-header">
					
					<h3>商品详细信息查看</h3>
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
		<div class="content-box-content">
			<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
			<div class="notification attention png_bg"></div>
						
          <form action="__APP__/Goodsinfo/update" method="post" enctype="multipart/form-data" id="form1">
	     <input type="hidden" name="id" value="<?php echo ($data["pk_GoodsInfo_Id"]); ?>"/>
          <label for="name">商品名称：<input type="text" name="name" value="<?php echo ($data["Goods_Name"]); ?>"/></label><br/>
          <label for="img">商品图片上传：<img src="<?php echo ($data["Goods_img"]); ?>" name="img" width='100px' height='80px'/></label><br/>
          <label for="sell">是否上架：<input type="radio" name="sell" value="1">是 <input type="radio" value="0" name="sell"/>否</label><br/>
          <label for="num">库存：&nbsp;&nbsp;<input type="number" name="num" value="<?php echo ($data["Goods_Num"]); ?>"/></label><br/>
          <label for="price">商品价格：<input type="price" name="price" value="<?php echo ($data["Goods_Price"]); ?>"/></label><br/>
          <label for="rewardCred">赠送积分：<input type="number" name="rewardCred" value="<?php echo ($data["Goods_RewardCred"]); ?>"/>分</label><br/>
          <label for="netContent">净含量：<input type="number" name="netContent" value="<?php echo ($data["Goods_NetContent"]); ?>"/></label><br/>
          <label for="classifi">商品分类：<input type="text" name="classifi" value="<?php echo ($data["Classifi_Name"]); ?>"/></label><br/>
          <label for="unit">产品单位：<input type="text" name="unit" value="<?php echo ($data["Goods_Unit"]); ?>"/></label><br/>
		<label for="intro">
			商品简介：<textarea name="editor1"><?php echo ($data["Goods_Intro"]); ?></textarea>
		</label><br/>
          <input type="submit" class="button" value="修改信息"/>		
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