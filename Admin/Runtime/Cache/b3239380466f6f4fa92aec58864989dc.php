<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
     <head>
	     <title>商品信息浏览</title>
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
                   <nav id="nav1">
	              <a href="__APP__/Goodsinfo/index">浏览商品</a> |
	              <a href="__APP__/Goodsinfo/add">添加商品</a>
	              </nav>
	       <hr/>
	             <form action="__APP__/Goodsinfo/search" method="post" id="fom">
	                      <select name="tiaojian">
		                        <option value="Goods_Name">商品名称</option>
		                        <option value="Goods_SellTime">上市时间</option>
		                        <option value="Goods_Num">库存</option>
		                        <option value="Classifi_Name">商品类别</option>
				              <option value="Goods_SellNum">销售量</option>
		                 </select>
		                 <input type="text" name="keyword"/><input type="submit" value="提交"/>
	             </form>
                  <table id="table1">
	                     <tr>
		                    <th>商品ID号</th>
		                    <th>商品名称</th>
		                    <th>商品图片</th>
		                    <th>商品价格</th>
		                    <th>商品简介</th>
		                    <th>商品类别</th>
		                    <th>是否上架</th>
		                    <th>上市时间</th>
			               <th>库存</th>
		                    <th>赠送积分</th>
		                    <th>净含量</th>
		                    <th>产品单位</th>
		                    <th>销售量</th>
			               <th>操作</th>
		                 </tr>
		                 <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr align="center">
		                      <td><?php echo ($vo["pk_GoodsInfo_Id"]); ?></td>
		                      <td><?php echo ($vo["Goods_Name"]); ?></td>
		                      <td><img src="<?php echo ($vo["Goods_img"]); ?>" style="width:80px; height:80px;"/></td>
		                      <td><?php echo ($vo["Goods_Price"]); ?></td>
		                      <td id="text"><?php echo ($vo["Goods_Intro"]); ?></td>
		                      <td><?php echo ($vo["Classifi_Name"]); ?></td>
		                      <td><?php echo ($vo["Goods_IsSell"]); ?></td>
		                      <td><?php echo ($vo["Goods_SellTime"]); ?></td>
		                      <td><?php echo ($vo["Goods_Num"]); ?></td>
		                      <td><?php echo ($vo["Goods_RewardCred"]); ?></td>
		                      <td><?php echo ($vo["Goods_NetContent"]); ?></td>
		                      <td><?php echo ($vo["Goods_Unit"]); ?></td>
		                      <td><?php echo ($vo["Goods_SellNum"]); ?></td>
		                      <td><a href="__APP__/Goodsinfo/del/id/<?php echo ($vo["pk_GoodsInfo_Id"]); ?>">删除</a> | <a href="__APP__/Goodsinfo/modify/id/<?php echo ($vo["pk_GoodsInfo_Id"]); ?>">修改</a></td>
		                 </tr><?php endforeach; endif; else: echo "" ;endif; ?>
	             </table>
	            <div id="div"><div id="black"><?php echo ($show); ?></div></div>
             </center>
		   </div>
      </body>
</html>