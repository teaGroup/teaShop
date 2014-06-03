<?php if (!defined('THINK_PATH')) exit();?><!doctype html>

<html>
<head>
<meta charset="utf-8">
<title>index</title>
		 <link rel="stylesheet" href="__PUBLIC__/css/hotnews_1.css" type="text/css" media="screen" />

         <script type="text/javascript" src="__PUBLIC__/js/jquery-1.3.2.min.js"></script>

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
         <a href="__APP__/News/index">浏览热点新闻</a> |
         <a href="__APP__/News/add">添加热点新闻</a>
     </nav>
     <br/>
     </center>
     <div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Content box</h3>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
						
						<div class="notification attention png_bg"></div>
						
					  <table>
							
							<thead>
								<tr>
								   <th ><input class="check-all" type="checkbox" /></th>
								   <th>新闻标题</th>
								   
								   <th>新闻内容</th>
								   <th>发布时间</th>
		
								</tr>
								
							</thead>
						 
							<tfoot>
								<tr>
									<td colspan="6">
										<div class="bulk-actions align-left">
											<select name="dropdown">
												<option value="option1">Choose an action...</option>
												<option value="option2">Edit</option>
												<option value="option3">Delete</option>
											</select>
											<a class="button" href="#">Apply to selected</a>
										</div>
										
						               <div id="div" align="center"><div id="black"><?php echo ($show); ?></div></div>
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
						 
							<tbody>
				
									
                       <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                   <td><input type="checkbox" /></td>
                  <td width="13%" font_color="black"><a href="__APP__/News/modify/id/<?php echo ($vo["pk_News_Id"]); ?>" title="Edit"><?php echo (msubstr($vo["News_Title"],0,10)); ?><strong>...</strong></a></td>
                  <td width="72%" font_color="black"><a href="__APP__/News/modify/id/<?php echo ($vo["pk_News_Id"]); ?>" title="Edit"><?php echo (msubstr($vo["News_Content"],0,34)); ?><strong>...</strong></a></td>
                  <td width="15%" font_color="black"><?php echo ($vo["News_PubDate"]); ?></td>
									<td width="84">
										<!-- Icons -->
										 <a href="__APP__/News/modify/id/<?php echo ($vo["pk_News_Id"]); ?>" title="Edit"><img src="__PUBLIC__/images/icons/pencil.png" alt="Edit" /></a>
								    <a href="__APP__/News/del/id/<?php echo ($vo["pk_News_Id"]); ?>" title="Delete"><img src="__PUBLIC__/images/icons/cross.png" alt="Delete" /></a></td>
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
							
							</tbody>
							
						</table>
						
					</div> <!-- End #tab1 -->
					
					        
					
				</div> <!-- End .content-box-content -->
				
			</div>
            </div>
</body>
</html>