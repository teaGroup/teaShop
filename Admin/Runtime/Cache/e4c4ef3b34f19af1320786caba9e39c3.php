<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>订单浏览</title>
<style>
.content-box{
	position:relative;
	top:-40px;
}
table td{
	text-align:center;
	font-size:14px;
	background:#FFF;
}
table tr th{
	text-align:center;
}
.content-box ul{
	position:absolute;
	right:60px;
	top:60px;
}
.content-box ul li{
	float:left;
}

</style>
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
    	<div class="content-box">
        	<div class="content-box-header">
					<h3>订单列表</h3>
					<div class="clear"></div>
			</div>
            <div class="content-box-content">
				<div class="tab-content default-tab" id="tab1">
                	<div class="search">
         	 			<form action="__URL__/query" method="post">
         	 			<h4>商品名称:
             				<input type="text" size="20" name="goodsname" />
             				<input type="submit" value="搜索" />
             			</h4>
          				</form>
          			</div>
          			<ul>
          				<li><a href="__URL__/index">全部订单</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
          				<li><a href="__URL__/query/state/0">未处理</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
            			<li><a href="__URL__/query/state/1">正在处理</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
            			<li><a href="__URL__/query/state/2">已处理</a></li>
          			</ul>
          			<br />
                	<div class="notification attention png_bg"></div>
                    
                    <table>
                    	<thead>
              				<tr>
               					<th width="50">订单号</th>
               					<th width="50">下单用户</th>
                				<th width="50">收货人</th>
                				<th width="50">总额</th>
               			 		<th width="50">订单状态</th>
                				<th width="120">下单时间</th>
                                <th width="50">操作</th>
              				</tr>
            			</thead>
                    	<tbody>
          				 <?php if(is_array($orderlist1)): $i = 0; $__LIST__ = $orderlist1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i; if(is_array($orderlist2)): $i = 0; $__LIST__ = $orderlist2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i; if($vo2['Order_Id'] == $vo1['pk_Order_Id']): if($loop == '1'): ?><tr>
              					<!--<td colspan="7" style="background:#F3F3F3; text-align:left; height:35px;">
                					<strong>订单编号：</strong>&nbsp;&nbsp;&nbsp;&nbsp;   
                   	 				<strong>成交时间:</strong><?php echo ($vo2["Order_Time"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;   
                    				<strong>总额:&nbsp;&nbsp; </strong>
                    				<span style="color:#900; font-family:Georgia; font-size:18px;"><?php echo ($vo2["Order_Sum"]); ?></span>
                                    <span style="float:right; margin-right:6px;"><a href="#">删除</a></span>
                				</td>-->
                                <td><strong><?php echo ($vo2["Order_Id"]); ?></strong></td>
                                <td><strong><?php echo ($vo2["Order_Owner"]); ?></strong></td>
                                <td><strong><?php echo ($vo2["Consi_Name"]); ?></strong></td>
                                <td><span style="color:#900; font-family:Georgia; font-size:18px;"><?php echo ($vo2["Order_Sum"]); ?></span></td>
                                <td><strong><?php echo ($vo2["Order_State"]); ?></strong></td>
                                <td><strong><?php echo ($vo2["Order_Time"]); ?></strong></td>
                                <td><a href="#">删除</a></td>
             			 	</tr><?php endif; ?>
              
              				<tr>
                				<td font_color="black" style="text-align:left;">
                  					<img src="<?php echo ($vo2["Goods_img"]); ?>" width='80' height='80' /><?php echo ($vo2["Goods_Name"]); ?>
                				</td>             
                				<td font_color="black"><span><?php echo ($vo2["Goods_Price"]); ?></span>元</td>
                				<td font_color="black"><?php echo ($vo2["OrderIt_Num"]); ?> </td>
                				<td font_color="black"><?php echo ($vo2["Goods_NetContent"]); echo ($vo2["Goods_Unit"]); ?></td>
                				<td font_color="black"><?php echo ($vo2["Order_SubSum"]); ?>元</td>
                 				<?php if($loop == '1'): ?><td font_color="black"><?php echo ($vo2["Order_State"]); ?></td>
                				<?php $loop++; ?>
                                <?php else: ?><td>&nbsp;</td><?php endif; ?>
                                <td><a href="#">删除</a></td>
              				</tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>
              				<?php $loop=1; endforeach; endif; else: echo "" ;endif; ?>
            			</tbody>
                    </table>
                    <br />
          			<div id="div" align="center"><div id="black"><?php echo ($show); ?></div></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>