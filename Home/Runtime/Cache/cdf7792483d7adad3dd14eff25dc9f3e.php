<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
     <head>
	      <title>更多商品</title>
		 <meta charset="utf8"/>
		 
		 <link rel="stylesheet" href="__PUBLIC__/css/css.css" />
		 <link rel="stylesheet" href="__PUBLIC__/css/page.css" />
		 <script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
           <script type="text/javascript" src="__PUBLIC__/js/Tab.js"></script>
		 <style>
		        #head{
			        margin-top:-17px;
				   padding:0px;
			   }
		        .goods_list{
			         width:1211px;
				    height:auto;
			   }
			   .goods_list .onegoods{
			         left:49px;
			         width:250px;
				    height:310px;
					z-index:10;
			   }
			   .goods_list .onegoods img
                  {
	                   width:250px;
	                   height:220px;
					   
                  }
			   .goods_list p{
	                   font-size:13px;
                  }
			   #div{
			      left:-212px;
				 font-size:18px;
			   }
		        #foot{
			         position:relative;
				    width:100%;
			   }
		 </style>
	</head>
	<body>
	      <!--****************头部***********************-->
	      <div id="head"><link href="__PUBLIC__/css/h_style.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="__PUBLIC__/css/base.css" />
<script src="__PUBLIC__/js/head.js" type="text/javascript"></script>

<div class="topbar">
  <div class="topbar2">
    <div class="add_fav"> <a onclick="" href="###">浮生若茶--名牌正品茶叶、茶礼商城！</a> </div>
    <div class="login-info"> <font>欢迎光临！&nbsp;&nbsp;</font> </div>
    <div class="quick-menu">
      <ul>
        <li><a title="帮助中心" href="#">帮助中心</a> </li>
        <li><a href="__APP__/Reg/reg">[免费注册]</a></li>
      </ul>
    </div>
  </div>
</div>
 <div id="userlogin">
  <div id="topnav" class="topnav"><a href="#" class="signin"><span>登录</span></a> </div>
  <fieldset id="signin_menu">
    <form method="post" id="signin" action="__APP__/Public/doLogin">
      <p>
      <label for="username">用户名</label>
      <input id="username" name="username" value="" title="username" tabindex="4" type="text">
      </p>
      <p>
        <label for="password">密码</label>
        <input id="password" name="password" value="" title="password" tabindex="5" type="password">
      </p>
      <p>
        <label for="code">验证码</label>
        <input id="code" type="text" style="width:70px;" class="text-input" name="code" required="required">
      </p>
      <div style="margin-left:90px; margin-top:-36px; width:100px;">
        <p id="verify-code">
          <img height=29 width=65 src="__APP__/Public/code" onclick='this.src=this.src+"?"+Math.random()'/>
          <span id="log_code" class="code"></span>
        </p>
        <div class="clear"></div>
      </div>
          


      <p class="remember">
        <input id="signin_submit" value="登 录" tabindex="6" type="submit">
        <!--<input id="remember" name="remember_me" value="1" tabindex="7" type="checkbox">
        <label for="remember">记住密码</label>-->
      </p>
    </form>
  </fieldset>
</div>
<script type="text/javascript">
        $(document).ready(function() {

            $(".signin").click(function(e) {          
				e.preventDefault();
                $("fieldset#signin_menu").toggle();
				$(".signin").toggleClass("menu-open");
            });
			
			$("fieldset#signin_menu").mouseup(function() {
				return false
			});
			$(document).mouseup(function(e) {
				if($(e.target).parent("a.signin").length==0) {
					$(".signin").removeClass("menu-open");
					$("fieldset#signin_menu").hide();
				}
			});			
			
        });
</script>

<div class="headermid">
  <div class="blank"></div>
  <div class="block clearfix">
    <div class="logo"> <a href="###" title="浮生若茶-名牌正品茶叶、茶礼商城"><img src="__PUBLIC__/images/logo.jpg" alt="浮生若茶-专业茶叶、茶具网上商城"></a> </div>
    <div class="topsearch">
      <div class="searchfrm"> 
        <script type="text/javascript">
					
					<!--
					function checkSearchForm()
					{
						if(document.getElementById('keyword').value)
						{
							return true;
						}
						else
						{
							alert("请输入搜索关键词！");
							return false;
						}
					}
					-->
					
					</script>
        <form id="searchForm" name="searchForm" method="get" action="__APP__/Search/search" onsubmit="return checkSearchForm()" class="f_l" style="_position:relative; top:5px;">
          <input name="keywords" type="text" id="keyword" value="" class="B_input" style="width:310px; height:22px; float:left;">
          <input name="imageField" type="submit" value="" class="go" style="cursor:pointer;">
        </form>
      </div>
      <div class="searchtags">
        <ul>
          <li>热门搜索:</li>
          <li style="padding-left:5px;"><a href="###">有机</a> </li>
          <li style="padding-left:5px;"><a href="###">黑玫瑰</a></li>
          <li style="padding-left:5px;"><a href="###">袋泡茶</a></li>
          <li style="padding-left:5px;"><a href="###">金花</a></li>
          <li style="padding-left:5px;"><a href="###">龙润</a></li>
          <li style="padding-left:5px;"><a href="###">西湖龙井</a></li>
          <li style="padding-left:5px;"><a href="###">黑茶</a></li>
          <li style="padding-left:5px;"><a href="###">木盒</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="blank"></div>
</div>

<div class="headNav">
  <div class="navCon w1020">
    <div class="navCon-cate fl navCon_on">
      <div class="navCon-cate-title"> <a href=""><span class="title">选茶中心</span></a></div>
      <div class="cateMenu hide">
        <ul>
          <li style="border-top: none;">
            <div class="cate-tag"> <strong><a href="__APP__/Search/sortgoods/name/绿茶">绿茶</a></strong>
              <div class="listModel">
                <p> <a href="__APP__/Search/sortgoods/name/西湖龙井">西湖龙井</a> <a href="__APP__/Search/sortgoods/name/洞庭碧螺春">洞庭碧螺春</a></p>
                <p>  <a href="__APP__/Search/sortgoods/name/黄山毛峰">黄山毛峰</a> <a href="__APP__/Search/sortgoods/name/太平猴魁">太平猴魁</a> </p>
              </div>
            </div>
            <div class="list-item hide">
              <ul class="itemleft">
                <dl>
                  <dt>绿茶</dt>
                  <dd> <a href="__APP__/Search/sortgoods/name/西湖龙井">西湖龙井</a> <a href="__APP__/Search/sortgoods/name/洞庭碧螺春">洞庭碧螺春</a> <a href="__APP__/Search/sortgoods/name/黄山毛峰">黄山毛峰</a> <a href="__APP__/Search/sortgoods/name/太平猴魁">太平猴魁</a> <a href="__APP__/Search/sortgoods/name/六安瓜片">六安瓜片</a> <a href="__APP__/Search/sortgoods/name/安吉白茶">安吉白茶</a> <a href="__APP__/Search/sortgoods/name/蒙顶甘露">蒙顶甘露</a> <a href="__APP__/Search/sortgoods/name/竹叶青">竹叶青</a> <a href="__APP__/Search/sortgoods/name/开化龙顶">开化龙顶</a> <a href="__APP__/Search/sortgoods/name/富硒绿茶">富硒绿茶</a> </dd>
                </dl>
                <div class="fn-clear"></div>
                <dl>
                  <dt>重量</dt>
                  <dd> <a href="http://www.jq-school.com">2两以下</a> <a href="http://www.jq-school.com">2两-半斤</a> <a href="http://jq-school.com">半斤-1斤</a></dd>
                </dl>
                <div class="fn-clear"></div>
                <dl>
                  <dt>价格</dt>
                  <dd> <a href="http://www.jq-school.com">100元以内</a> <a href="http://www.jq-school.com">101-300元</a> <a href="http://jq-school.com">301-500元</a> <a href="http://jq-school.com">501-800元</a> <a href="http://jq-school.com">800以上</a></dd>
                </dl>
                <div class="fn-clear"></div>
              </ul>
              <ul class="itemright">
                <dl>
                  <dt>促销信息</dt>
                </dl>
              </ul>
            </div>
          </li>
          <li style="border-top: none;">
            <div class="cate-tag"> <strong><a href="__APP__/Search/sortgoods/name/乌龙茶">乌龙茶</a></strong>
              <div class="listModel">
                <p> <a href="__APP__/Search/sortgoods/name/安溪铁观音">安溪铁观音</a> <a href="__APP__/Search/sortgoods/name/武夷大红袍">武夷大红袍</a></p>
                <p>  <a href="__APP__/Search/sortgoods/name/台湾乌龙茶">台湾乌龙茶</a> <a href="__APP__/Search/sortgoods/name/凤凰单纵">凤凰单纵</a> </p>
              </div>
            </div>
            <div class="list-item hide">
              <ul class="itemleft">
                <dl>
                  <dt>乌龙茶</dt>
                  <dd> <a href="__APP__/Search/sortgoods/name/安溪铁观音">安溪铁观音</a> <a href="__APP__/Search/sortgoods/name/武夷大红袍">武夷大红袍</a> <a href="__APP__/Search/sortgoods/name/台湾乌龙茶">台湾乌龙茶</a> <a href="__APP__/Search/sortgoods/name/凤凰单纵">凤凰单纵</a></dd>
                </dl>
                <div class="fn-clear"></div>
                <dl>
                  <dt>重量</dt>
                  <dd> <a href="http://www.jq-school.com">2两以下</a> <a href="http://www.jq-school.com">2两-半斤</a> <a href="http://jq-school.com">半斤-1斤</a><a href="http://www.jq-school.com">1斤-1公斤</a></dd>
                </dl>
                <div class="fn-clear"></div>
                <dl>
                  <dt>价格</dt>
                  <dd> <a href="http://www.jq-school.com">100元以内</a> <a href="http://www.jq-school.com">101-300元</a> <a href="http://jq-school.com">301-500元</a> <a href="http://jq-school.com">501-800元</a> <a href="http://jq-school.com">800以上</a></dd>
                </dl>
                <div class="fn-clear"></div>
              </ul>
              <ul class="itemright">
                <dl>
                  <dt>促销信息</dt>
                </dl>
              </ul>
            </div>
          </li>
          <li style="border-top: none;">
            <div class="cate-tag"> <strong><a href="__APP__/Search/sortgoods/name/红茶">红茶</a></strong>
              <div class="listModel">
                <p> <a href="__APP__/Search/sortgoods/name/正山小种">正山小种</a> <a href="__APP__/Search/sortgoods/name/祁门红茶">祁门红茶</a></p>
                <p>  <a href="__APP__/Search/sortgoods/name/云南滇红">云南滇红</a> <a href="__APP__/Search/sortgoods/name/金骏眉">金骏眉</a> </p>
              </div>
            </div>
            <div class="list-item hide">
              <ul class="itemleft">
                <dl>
                  <dt>红茶</dt>
                  <dd> <a href="__APP__/Search/sortgoods/name/正山小种">正山小种</a> <a href="__APP__/Search/sortgoods/name/祁门红茶">祁门红茶</a> <a href="__APP__/Search/sortgoods/name/云南滇红">云南滇红</a> <a href="__APP__/Search/sortgoods/name/金骏眉">金骏眉</a><a href="__APP__/Search/sortgoods/name/坦洋工夫">坦洋工夫</a><a href="__APP__/Search/sortgoods/name/白琳工夫">白琳工夫</a><a href="__APP__/Search/sortgoods/name/四川红茶">四川红茶</a><a href="__APP__/Search/sortgoods/name/锡兰红茶">锡兰红茶</a><a href="__APP__/Search/sortgoods/name/其他红茶">其他红茶</a></dd>
                </dl>
                <div class="fn-clear"></div>
                <dl>
                  <dt>重量</dt>
                  <dd> <a href="http://www.jq-school.com">2两以下</a> <a href="http://www.jq-school.com">2两-半斤</a> <a href="http://jq-school.com">半斤-1斤</a><a href="http://www.jq-school.com">1斤-1公斤</a></dd>
                </dl>
                <div class="fn-clear"></div>
                <dl>
                  <dt>价格</dt>
                  <dd> <a href="http://www.jq-school.com">100元以内</a> <a href="http://www.jq-school.com">101-300元</a> <a href="http://jq-school.com">301-500元</a> <a href="http://jq-school.com">501-800元</a> <a href="http://jq-school.com">800以上</a></dd>
                </dl>
                <div class="fn-clear"></div>
              </ul>
              <ul class="itemright">
                <dl>
                  <dt>促销信息</dt>
                </dl>
              </ul>
            </div>
          </li>
          <li style="border-top: none;">
            <div class="cate-tag"> <strong><a href="__APP__/Search/sortgoods/name/黑茶">黑茶</a></strong>
              <div class="listModel">
                <p> <a href="__APP__/Search/sortgoods/name/普洱茶">普洱茶</a> <a href="__APP__/Search/sortgoods/name/安化黑茶">安化黑茶</a></p>
                <p>  <a href="__APP__/Search/sortgoods/name/泾渭茯茶">泾渭茯茶</a> </p>
              </div>
            </div>
            <div class="list-item hide">
              <ul class="itemleft">
                <dl>
                  <dt>黑茶</dt>
                  <dd> <a href="__APP__/Search/sortgoods/name/普洱茶">普洱茶</a> <a href="__APP__/Search/sortgoods/name/安化黑茶">安化黑茶</a> <a href="__APP__/Search/sortgoods/name/泾渭茯茶">泾渭茯茶</a></dd>
                </dl>
                <div class="fn-clear"></div>
                <dl>
                  <dt>重量</dt>
                  <dd> <a href="http://www.jq-school.com">2两以下</a> <a href="http://www.jq-school.com">2两-半斤</a> <a href="http://jq-school.com">半斤-1斤</a><a href="http://www.jq-school.com">1斤-1公斤</a><a href="http://www.jq-school.com">1公斤以上</a></dd>
                </dl>
                <div class="fn-clear"></div>
                <dl>
                  <dt>价格</dt>
                  <dd> <a href="http://www.jq-school.com">100元以内</a> <a href="http://www.jq-school.com">101-300元</a> <a href="http://jq-school.com">301-500元</a> <a href="http://jq-school.com">501-800元</a> <a href="http://jq-school.com">800以上</a></dd>
                </dl>
                <div class="fn-clear"></div>
              </ul>
              <ul class="itemright">
                <dl>
                  <dt>促销信息</dt>
                </dl>
              </ul>
            </div>
          </li>
          <li style="border-top: none;">
            <div class="cate-tag"> <strong><a href="__APP__/Search/sortgoods/name/白茶">白茶</a></strong>
              <div class="listModel">
                <p> <a href="__APP__/Search/sortgoods/name/白毫银针">白毫银针</a> <a href="__APP__/Search/sortgoods/name/白牡丹">白牡丹</a></p>
              </div>
            </div>
            <div class="list-item hide">
              <ul class="itemleft">
                <dl>
                  <dt>白茶</dt>
                  <dd> <a href="__APP__/Search/sortgoods/name/白毫银针">白毫银针</a> <a href="__APP__/Search/sortgoods/name/白牡丹">白牡丹</a></dd>
                </dl>
                <div class="fn-clear"></div>
                <dl>
                  <dt>重量</dt>
                  <dd> <a href="http://www.jq-school.com">2两以下</a> <a href="http://www.jq-school.com">2两-半斤</a> <a href="http://jq-school.com">半斤-1斤</a><a href="http://www.jq-school.com">1斤-1公斤</a><a href="http://www.jq-school.com">1公斤以上</a></dd>
                </dl>
                <div class="fn-clear"></div>
                <dl>
                  <dt>价格</dt>
                  <dd> <a href="http://www.jq-school.com">100元以内</a> <a href="http://www.jq-school.com">101-300元</a> <a href="http://jq-school.com">301-500元</a> <a href="http://jq-school.com">501-800元</a> <a href="http://jq-school.com">800以上</a></dd>
                </dl>
                <div class="fn-clear"></div>
              </ul>
              <ul class="itemright">
                <dl>
                  <dt>促销信息</dt>
                </dl>
              </ul>
            </div>
          </li>
          <li style="border-top: none;">
            <div class="cate-tag"> <strong><a href="__APP__/Search/sortgoods/name/花草茶">花草茶</a></strong>
              <div class="listModel">
                <p> <a href="__APP__/Search/sortgoods/name/苦荞茶">苦荞茶</a> <a href="__APP__/Search/sortgoods/name/茉莉花茶">茉莉花茶</a></p>
                <p>  <a href="__APP__/Search/sortgoods/name/水果茶">水果茶</a> <a href="__APP__/Search/sortgoods/name/苦丁茶">苦丁茶</a> </p>
              </div>
            </div>
            <div class="list-item hide">
              <ul class="itemleft">
                <dl>
                  <dt>花草茶</dt>
                  <dd> <a href="__APP__/Search/sortgoods/name/苦荞茶">苦荞茶</a> <a href="__APP__/Search/sortgoods/name/茉莉花茶">茉莉花茶</a> <a href="__APP__/Search/sortgoods/name/水果茶">水果茶</a> <a href="__APP__/Search/sortgoods/name/苦丁茶">苦丁茶</a><a href="__APP__/Search/sortgoods/name/菊花">菊花</a><a href="__APP__/Search/sortgoods/name/昆仑血菊">昆仑血菊</a><a href="__APP__/Search/sortgoods/name/玫瑰花">玫瑰花</a><a href="__APP__/Search/sortgoods/name/养生茶">养生茶</a></dd>
                </dl>
                <div class="fn-clear"></div>
                <dl>
                  <dt>重量</dt>
                  <dd> <a href="http://www.jq-school.com">2两以下</a> <a href="http://www.jq-school.com">2两-半斤</a> <a href="http://jq-school.com">半斤-1斤</a><a href="http://www.jq-school.com">1斤-1公斤</a></dd>
                </dl>
                <div class="fn-clear"></div>
                <dl>
                  <dt>价格</dt>
                  <dd> <a href="http://www.jq-school.com">100元以内</a> <a href="http://www.jq-school.com">101-300元</a> <a href="http://jq-school.com">301-500元</a> <a href="http://jq-school.com">501-800元</a> <a href="http://jq-school.com">800以上</a></dd>
                </dl>
                <div class="fn-clear"></div>
              </ul>
              <ul class="itemright">
                <dl>
                  <dt>促销信息</dt>
                </dl>
              </ul>
            </div>
          </li>
          <li style="border-top: none;">
            <div class="cate-tag"> <strong><a href="__APP__/Search/sortgoods/name/茶具">茶具</a></strong>
              <div class="listModel">
                <p> <a href="__APP__/Search/sortgoods/name/玻璃茶具">玻璃茶具</a> <a href="__APP__/Search/sortgoods/name/陶瓷茶具">陶瓷茶具</a></p>
                <p>  <a href="__APP__/Search/sortgoods/name/紫砂茶具">紫砂茶具</a> <a href="__APP__/Search/sortgoods/name/电茶壶">电茶壶</a> </p>
              </div>
            </div>
            <div class="list-item hide">
              <ul class="itemleft">
                <dl>
                  <dt>茶具</dt>
                  <dd> <a href="__APP__/Search/sortgoods/name/玻璃茶具">玻璃茶具</a> <a href="__APP__/Search/sortgoods/name/陶瓷茶具">陶瓷茶具</a> <a href="__APP__/Search/sortgoods/name/紫砂茶具">紫砂茶具</a> <a href="__APP__/Search/sortgoods/name/电茶壶">电茶壶</a><a href="__APP__/Search/sortgoods/name/茶盘"></a><a href="__APP__/Search/sortgoods/name/茶宠">茶宠</a><a href="__APP__/Search/sortgoods/name/其他茶具">其他茶具</a></dd>
                </dl>
                <div class="fn-clear"></div>
              </ul>
            </div>
          </li>
          <li style="border-top: none;">
            <div class="cate-tag"> <strong><a href="http://www.jq-school.com">价格</a></strong>
              <div class="listModel">
                <p> <a href="http://www.jq-school.com">100元以内</a> <a href="http://www.jq-school.com">101-300元</a></p>
                <p>  <a href="http://jq-school.com">301-500元</a> <a href="http://jq-school.com">501-800元</a> </p>
              </div>
            </div>
            <div class="list-item hide">
              <ul class="itemleft">
                <dl>
                  <dt>价格</dt>
                  <dd> <a href="#">100元以内</a> <a href="#">101-300元</a> <a href="http://www.jq-school.com">301-500元</a> <a href="http://www.jq-school.com">501-800元</a><a href="http://www.jq-school.com">800元以上</a></dd>
                </dl>
                <div class="fn-clear"></div>
              </ul>
            </div>
          </li>
          <li>
            <div class="float-list-dnav"> <a href="http://jq-school.com">新品</a> <a href="http://www.jq-school.com">清仓</a> <a href="http://www.jq-school.com">多买优惠</a> </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="navCon-menu fl" style="z-index:50;">
      <ul>
        <li><a href="__APP__/Index/index">首页</a></li>
        <li><a href="http://www.jq-school.com">企业文化</a></li>
      </ul>
    </div>
  </div>
  
</div>
<div id="topcart" style="top: 111px;">
  <div class="cartinfo" id="cartinfo" style="left: 326px;">
    <div class="cartleft">
      <div class="cart" id="ECS_CARTINFO"> <a href="__APP__/Cart/index" title="查看购物车">购物车 <b class="corg"><?php echo ($goodsnum); ?></b> 件</a> </div>
    </div>
    <div class="cartright"> <a href="__APP__/Order/consignee"></a> </div>
  </div>
</div>

 </div>
		 <!--*****************主体部分**********************-->
		 <article class="goods_list"> 
          <ul>
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="onegoods"> 
                   <a class="img" target="_blank" href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["pk_Goodsinfo_Id"]); ?>" title="<?php echo ($vo["Goods_Name"]); ?>"> 
                      <img src="<?php echo ($vo["Goods_img"]); ?>" alt="<?php echo ($vo["Goods_Name"]); ?>"> 
                    </a>                             
                    <p class="price"><strong>￥<?php echo ($vo["Goods_Price"]); ?>元</strong> </p>
                    <p><a href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["pk_Goodsinfo_Id"]); ?>"><?php echo ($vo["Goods_Name"]); ?></a></p>               
              </li><?php endforeach; endif; else: echo "" ;endif; ?>    
            </ul>
        </article>
	   <div id="div"><div id="black"><?php echo ($show); ?></div></div>
		 <!--**************尾部***************************-->
		 <div id="foot">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/foot_public.css" />
<div class="help">
<div class="help_box">

<div class="help_mod">
<div class="help_mod_t">购物指南</div>
<div class="help_mod_c"><a rel="nofollow" href="####h1" target="_blank">怎样购物</a></div>
<div class="help_mod_c"><a rel="nofollow" href="####h2" target="_blank">积分政策</a></div>
<div class="help_mod_c"><a rel="nofollow" href="####h3" target="_blank">会员优惠</a></div>
<div class="help_mod_c"><a rel="nofollow" href="####h4" target="_blank">VIP企业用户</a></div>
<div class="help_mod_c"><a rel="nofollow" href="####h5" target="_blank">订单状态解释</a></div>
</div>
<div class="help_mod">
<div class="help_mod_t">配送方式</div>
<div class="help_mod_c"><a rel="nofollow" href="###h1" target="_blank">快递资费及送达时间</a></div>
<div class="help_mod_c"><a rel="nofollow" href="###h2" target="_blank">快递覆盖地区查询</a></div>
<div class="help_mod_c"><a rel="nofollow" href="###h3" target="_blank">验货与签收</a></div>
</div>
<div class="help_mod">
<div class="help_mod_t">支付方式</div>
<div class="help_mod_c"><a rel="nofollow" href="####h4" target="_blank">货到付款</a></div>
<div class="help_mod_c"><a rel="nofollow" href="####h1" target="_blank">支付宝</a></div>
<div class="help_mod_c"><a rel="nofollow" href="####h2" target="_blank">财付通</a></div>
<div class="help_mod_c"><a rel="nofollow" href="####h5" target="_blank">银行转账</a></div>
<div class="help_mod_c"><a rel="nofollow" href="####h3" target="_blank">网银在线</a></div>
</div>
<div class="help_mod">
<div class="help_mod_t">售后服务</div>
<div class="help_mod_c"><a rel="nofollow" href="###h1" target="_blank">退换货原则</a></div>
<div class="help_mod_c"><a rel="nofollow" href="###h2" target="_blank">换货流程</a></div>
<div class="help_mod_c"><a rel="nofollow" href="###h3" target="_blank">退货流程</a></div>
</div>
<div class="help_mod">
<div class="help_mod_t">关于浮生若茶</div>
<div class="help_mod_c"><a rel="nofollow" href="###" target="_blank">关于我们</a></div>
<div class="help_mod_c"><a rel="nofollow" href="###" target="_blank">友情链接</a></div>
<div class="help_mod_c"><a rel="nofollow" href="###" target="_blank">媒体报道</a></div>
<div class="help_mod_c"><a rel="nofollow" href="###" target="_blank">醉品动态</a></div>
</div>
<div class="clear">&nbsp;</div>
</div>
</div>
<div class="foot_safe">
<div class="foot"><a rel="nofollow" href="###" target="_blank">关于我们</a>|<a rel="nofollow" href="###" target="_blank">隐私申明</a>|<a rel="nofollow" href="###" target="_blank">成为供应商</a>|<a href="###" target="_blank">社区</a>|<a href="###" target="_blank">茶叶</a>|<a href="###" target="_blank">博客</a>|<a href="###" target="_blank">友情链接</a>|<a href="###" target="_blank">网站地图</a><br>
  <center>Copyright 2014 - 2015 浮生若茶  中山大学南方学院计算机（1）班出品  All Rights Reserved </center>
</div>
</div>
</div>
	</body>
</html>