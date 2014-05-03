<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>浮生若茶</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/css.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/slider.css" />
<link href="__PUBLIC__/css/h_style.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="__PUBLIC__/css/base.css" />

<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/Tab.js"></script>


<script src="__PUBLIC__/js/head.js" type="text/javascript"></script>

</head>
<body>
<div id="head"> 
<div class="topbar">
  <div class="topbar2">
    <div class="add_fav"> <a onclick="" href="###">浮生若茶--名牌正品茶叶、茶礼商城！</a> </div>
    <div class="login-info"> <font>欢迎光临！&nbsp;&nbsp;</font> </div>
    <div class="quick-menu">
      <ul>
        <li><a title="我的帐户" href="#">我的帐户</a> </li>
        <li><a title="帮助中心" href="#">帮助中心</a> </li>
        <li><a href="#">[免费注册]</a></li>
      </ul>
    </div>
  </div>
</div>
 <div id="userlogin">
  <div id="topnav" class="topnav"><a href="login" class="signin"><span>登录</span></a> </div>
  <fieldset id="signin_menu">
    <form method="post" id="signin" action="#">
      <p>
      <label for="username">用户名</label>
      <input id="username" name="username" value="" title="username" tabindex="4" type="text">
      </p>
      <p>
        <label for="password">密码</label>
        <input id="password" name="password" value="" title="password" tabindex="5" type="password">
      </p>
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
        <form id="searchForm" name="searchForm" method="get" action="search.php" onsubmit="return checkSearchForm()" class="f_l" style="_position:relative; top:5px;">
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
            <div class="cate-tag"> <strong><a href="http://www.jq-school.com">白酒</a></strong>
              <div class="listModel">
                <p> <a href="http://www.jq-school.com">茅台</a> <a href="http://www.jq-school.com">洋河</a> <a href="http://jq-school.com">郎酒</a> <a href="http://www.jq-school.com">古井贡酒</a> </p>
                <p> <a href="http://www.jq-school.com">习酒</a> <a href="http://www.jq-school.com">珍酒</a> <a href="http://www.jq-school.com">红星</a> <a href="http://jq-school.com">泸州老窖</a> </p>
                <p> <a href="http://jq-school.com">沱牌</a> <a href="http://jq-school.com">国台</a> <a href="http://www.jq-school.com">五粮液</a> <a href="http://www.jq-school.com">剑南春</a> </p>
              </div>
            </div>
            <div class="list-item hide">
              <ul class="itemleft">
                <dl>
                  <dt>品牌</dt>
                  <dd> <a href="http://www.jq-school.com">茅台</a> <a href="http://www.jq-school.com">五粮液</a> <a href="http://www.jq-school.com">剑南春</a> <a href="http://www.jq-school.com">水井坊</a> <a href="http://jq-school.com">汾酒</a> <a href="http://jq-school.com">洋河</a> <a href="http://jq-school.com">泸州老窖</a> <a href="http://jq-school.com">珍酒</a> <a href="http://www.jq-school.com">郎酒</a> <a href="http://www.jq-school.com">古井贡酒</a> <a href="http://www.jq-school.com">西凤酒</a> <a href="http://www.jq-school.com">董酒</a> <a href="http://www.jq-school.com">酒鬼酒</a> <a href="http://jq-school.com">红星</a> <a href="http://jq-school.com">文君酒</a> <a href="http://jq-school.com">牛栏山</a> <a href="http://jq-school.com">四特酒</a> <a href="http://www.jq-school.com">口子酒</a><a href="http://www.jq-school.com">星河湾</a> <a href="http://www.jq-school.com">百年传奇</a> </dd>
                </dl>
                <div class="fn-clear"></div>
                <dl>
                  <dt>香型</dt>
                  <dd> <a href="http://www.jq-school.com">酱香型</a> <a href="http://www.jq-school.com">浓香型</a> <a href="http://jq-school.com">清香型</a> <a href="http://jq-school.com">凤香型</a> <a href="http://jq-school.com">馥郁香</a> <a href="http://jq-school.com">董香型</a> <a href="http://jq-school.com">特香型</a> <a href="http://jq-school.com">芝麻香</a> <a href="http://jq-school.com">兼香型</a> <a href="http://www.jq-school.com">金门香型</a> <a href="http://www.jq-school.com">老干白</a> <a href="http://www.jq-school.com">绵柔型</a> <a href="http://www.jq-school.com">柔和型</a> <a href="http://www.jq-school.com">小曲型</a> <a href="http://www.jq-school.com">生态竹香型</a> </dd>
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
          <li >
            <div class="cate-tag"> <strong><a href="http://www.jq-school.com">葡萄酒</a></strong>
              <div class="listModel">
                <p> <a href="http://www.jq-school.com">中国</a> <a href="http://www.jq-school.com">法国</a> <a href="http://www.jq-school.com">智利</a> <a href="http://jq-school.com">葡萄牙</a> </p>
                <p> <a href="http://jq-school.com">意大利</a> <a href="http://jq-school.com">澳大利亚</a> <a href="http://www.jq-school.com">德国</a> <a href="http://www.jq-school.com">南非</a> </p>
                <p> <a href="http://www.jq-school.com">美国</a> <a href="http://www.jq-school.com">阿根廷</a> <a href="http://www.jq-school.com">西班牙</a> </p>
              </div>
            </div>
            <div class="list-item hide">
              <ul class="itemleft">
                <dl>
                  <dt>产区</dt>
                  <dd> <a href="http://www.jq-school.com">澳大利亚</a> <a href="http://www.jq-school.com">德国</a> <a href="http://www.jq-school.com">法国</a> <a href="http://www.jq-school.com">加拿大</a> <a href="http://jq-school.com">美国</a> <a href="http://jq-school.com">西班牙</a> <a href="http://jq-school.com">智利</a> <a href="http://jq-school.com">葡萄牙</a> <a href="http://www.jq-school.com">俄罗斯</a> <a href="http://www.jq-school.com">阿根廷</a> <a href="http://www.jq-school.com">新西兰</a> <a href="http://www.jq-school.com">南非</a> <a href="http://www.jq-school.com">意大利</a> <a href="http://jq-school.com">中国</a> <a href="http://jq-school.com">希腊</a> </dd>
                </dl>
                <div class="fn-clear"></div>
                <dl>
                  <dt>类型</dt>
                  <dd> <a href="http://jq-school.com">红葡萄酒</a> <a href="http://www.jq-school.com">白葡萄酒</a> <a href="http://www.jq-school.com">桃红葡萄酒</a> <a href="http://www.jq-school.com">起泡酒/香槟</a> <a href="http://www.jq-school.com">冰酒/贵腐/甜酒</a> </dd>
                </dl>
                <div class="fn-clear"></div>
                <dl>
                  <dt>品种</dt>
                  <dd> <a href="http://www.jq-school.com">芭贝拉</a> <a href="http://www.jq-school.com">长相思</a> <a href="http://www.jq-school.com">解百纳</a> <a href="http://www.jq-school.com">玛尔维萨</a> <a href="http://www.jq-school.com">综合佳酿</a> <a href="http://www.jq-school.com">美乐</a> </dd>
                </dl>
                <div class="fn-clear"></div>
              </ul>
              <ul class="itemright">
                <dl>
                  <dt>促销信息</dt>
                </dl>
                <div class="news-list">
                  <p> <span class="red">[加州乐事]</span> <a href="http://www.jq-school.com">美国爆款红酒，超市89元，68元特价售</a> </p>
                  <p> <span class="red">[华尔兹]</span> <a href="http://www.jq-school.com">德国经典款，39元继续热卖中</a> </p>
                  <p> <span class="red">[贵妇]</span> <a href="http://www.jq-school.com">法国进口红酒，购满6瓶每瓶仅需38元，超值专享价</a> </p>
                </div>
                
              </ul>
            </div>
          </li>
          <li>
            <div class="float-list-dnav"> <a href="http://jq-school.com">新品</a> <a href="http://www.jq-school.com">清仓</a> <a href="http://www.jq-school.com">多买优惠</a> </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="navCon-menu fl">
      <ul>
        <li><a href="http://www.jq-school.com">首页</a></li>
        <li><a href="http://www.jq-school.com">购酒团</a></li>
      </ul>
    </div>
  </div>
</div>
<div id="topcart" style="top: 111px;">
  <div class="cartinfo" id="cartinfo" style="left: 926px;">
    <div class="cartleft">
      <div class="cart" id="ECS_CARTINFO"> <a href="" title="查看购物车">购物车 <b class="corg">0</b> 件</a> </div>
    </div>
    <div class="cartright"> <a href=""></a> </div>
  </div>
</div>
 </div>
<!--**************************************************flash******************************************************-->
<div id="flash"> 
<header>
  
</header>
</div>
<div id="container">
  <div id="content">
<!--**************************************************热、新品展示和排行榜******************************************************-->
   <!--××××××××××××××××××××××××新品展示×××××××××××××××××××××××-->
    <div class="indexhot">
      <div class="indexhotshow" id="tab">
        <div class="tab-nav j-tab-nav">
          <a href="javascript:void(0);" class="current">新品上架</a>
          <a href="javascript:void(0);">热卖商品</a> 
          <a href="javascript:void(0);">精品茶具</a> 
          <a href="javascript:void(0);">热销礼品</a> 
        </div>
        <div class="tab-con">
          <div class="j-tab-con">
            <div class="tab-con-item" style="display:block;">
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶2.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶2.png">
                <p class="price"><strong>￥40元</strong></p>
                <p>【品品香】高级白牡丹50g散装</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶2.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶2.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶2.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶2.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶2.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶2.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶2.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
            </div>
            <div class="tab-con-item">
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶3.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶5.png">
                <p class="price"><strong>￥40元</strong></p>
                <p>【品品香】高级白牡丹50g散装</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶9.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶10.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶11.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶6.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶2.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶2.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
            </div>
            <div class="tab-con-item">
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶8.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶3.png">
                <p class="price"><strong>￥40元</strong></p>
                <p>【品品香】高级白牡丹50g散装</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶2.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶4.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶2.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶9.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶2.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶2.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶2.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
            </div>
            <div class="tab-con-item">
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶8.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶2.png">
                <p class="price"><strong>￥40元</strong></p>
                <p>【品品香】高级白牡丹50g散装</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶2.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶2.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶5.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶2.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶2.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶7.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
              <li class="onegoods"> <img src="__PUBLIC__/images/白茶8.png">
                <p class="price"><strong>￥10元</strong></p>
                <p>【绿雪芽】有机白茶袋泡盒装50g</p>
              </li>
            </div>
          </div>
        </div>
        
        
        
      </div>
      <!--××××××××××××××××××××××排行榜×××××××××××××××××××××××××-->
      <div class="indexhot_right" id="tab2">
      <span class="leader"><b>排行榜</b></span>
        <div class="tab2-nav j2-tab-nav">
          <a href="javascript:void(0);" class="current">周</a>
          <a href="javascript:void(0);">月</a> 
          <a href="javascript:void(0);">年</a> 
        </div>
        <!--列表-->
        <div class="tab2-con renqi">
          <div class="j2-tab-con">
            <div class="tab-con-item" style="display:block;">
            <div class="numlist" id="numtext">
				<ul>
				    <li class="first">
						<em class="bg1">01</em>
                        <img src="__PUBLIC__/images/白茶3.png" style="display: block; ">
						<a href="#" target="_blank">【彝家山寨】四川凉山黑苦荞茶156克袋装</a><br />				
						<span class="f1" style="display: inline; ">￥</span><span class="f2" style="display: inline; ">26</span>
						
					</li>
				 
				    <li class="">
						<em class="bg2">02</em>
						<img src="__PUBLIC__/images/白茶3.png" style="display: none; ">
						<a href="#" target="_blank">【老曼峨】云南普洱茶深山老树生态饼茶100克熟茶</a>	<br />			
						<span class="f1" style="display: none; ">￥</span><span class="f2" style="display: none; ">16</span>
					</li>
				 
				    <li class="">
						<em class="bg3">03</em>
						<img src="__PUBLIC__/images/白茶5.png"  style="display: none; ">
						<a href="#" target="_blank">【怡清源】安化黑茶金手筑茶颗粒装65g</a><br />				
						<span class="f1" style="display: none; ">￥</span><span class="f2" style="display: none; ">46</span>
					</li>
				 
				    <li class="">
						<em>04</em>
						<img src="__PUBLIC__/images/白茶3.png" style="display: none; ">
						<a href="#" target="_blank">【彝家山寨】四川凉山黑苦荞茶156克袋装</a><br />				
						<span class="f1" style="display: none; ">￥</span><span class="f2" style="display: none; ">15</span>
					</li>
				 
				    <li class="">
						<em>05</em>
						<img src="__PUBLIC__/images/白茶7.png" style="display: none; ">
						<a href="#" target="_blank">【老曼峨】云南普洱茶深山老树生态饼茶100克熟茶</a><br />				
						<span class="f1" style="display: none; ">￥</span><span class="f2" style="display: none; ">93</span>
					</li>
				 
				    <li class="">
						<em>06</em>
						<img src="__PUBLIC__/images/白茶3.png" style="display: none; ">
						<a href="#" target="_blank">【怡清源】安化黑茶金手筑茶颗粒装65g</a><br />				
						<span class="f1" style="display: none; ">￥</span><span class="f2" style="display: none; ">44</span>
					</li>
				 
				    <li class="">
						<em>07</em>
						<img src="__PUBLIC__/images/白茶9.png"  style="display: none; ">
						<a href="#" target="_blank">【彝家山寨】四川凉山黑苦荞茶156克袋装</a><br />				
						<span class="f1" style="display: none; ">￥</span><span class="f2" style="display: none; ">170</span>
					</li>
				 
				    <li class="">
						<em>08</em>
						<img src="__PUBLIC__/images/白茶3.png" style="display: none; ">
						<a href="#" target="_blank">【老曼峨】云南普洱茶深山老树生态饼茶100克熟茶</a><br />				
						<span class="f1" style="display: none; ">￥</span><span class="f2" style="display: none; ">85</span>
					</li>
				 
				    <li class="">
						<em>09</em>
						<img src="__PUBLIC__/images/白茶6.png" style="display: none; ">
						<a href="#" target="_blank">【怡清源】安化黑茶金手筑茶颗粒装65g</a><br />				
						<span class="f1" style="display: none; ">￥</span><span class="f2" style="display: none; ">195</span>
					</li>
				 
				    <li class="">
						<em>10</em>
						<img src="__PUBLIC__/images/白茶3.png"  style="display: none; ">
						<a href="#" target="_blank">【彝家山寨】四川凉山黑苦荞茶156克袋装</a><br />				
						<span class="f1" style="display: none; ">￥</span><span class="f2" style="display: none; ">95</span>
					</li>
                    <li class="">
						<em>11</em>
						<img src="__PUBLIC__/images/白茶2.png"  style="display: none; ">
						<a href="#" target="_blank">【老曼峨】云南普洱茶深山老树生态饼茶100克熟茶</a><br />				
						<span class="f1" style="display: none; ">￥</span><span class="f2" style="display: none; ">95</span>
					</li>
                    <li class="">
						<em>12</em>
						<img src="__PUBLIC__/images/白茶3.png"  style="display: none; ">
						<a href="#" target="_blank">【怡清源】安化黑茶金手筑茶颗粒装65g</a><br />				
						<span class="f1" style="display: none; ">￥</span><span class="f2" style="display: none; ">95</span>
					</li>
                    <li class="">
						<em>13</em>
						<img src="__PUBLIC__/images/白茶4.png"  style="display: none; ">
						<a href="#" target="_blank">【老曼峨】云南普洱茶深山老树生态饼茶100克熟茶</a><br />				
						<span class="f1" style="display: none; ">￥</span><span class="f2" style="display: none; ">95</span>
					</li>
                    <li class="">
						<em>14</em>
						<img src="__PUBLIC__/images/白茶3.png"  style="display: none; ">
						<a href="#" target="_blank">【彝家山寨】四川凉山黑苦荞茶156克袋装</a><br />				
						<span class="f1" style="display: none; ">￥</span><span class="f2" style="display: none; ">80</span>
					</li>
                    <li class="">
						<em>15</em>
						<img src="__PUBLIC__/images/白茶5.png"  style="display: none; ">
						<a href="#" target="_blank">【怡清源】安化黑茶金手筑茶颗粒装65g</a><br />				
						<span class="f1" style="display: none; ">￥</span><span class="f2" style="display: none; ">58</span>
					</li>
				</ul>
			</div>	
			</div>
            <div class="tab-con-item">
              2222222
            </div>
            <div class="tab-con-item">
              111111
            </div>
            <div class="tab-con-item">
              3333333
            </div>
            </div>
          </div>
        </div>
     </div>
<!--**************************************************商品展示******************************************************-->
<!--------------------------------绿茶---------------------------------------->
    <section>
      <header class="productAreaHead">
        <h1> 绿茶 </h1>
        	<div class="moreProduct">
                <ul>
                    <li style="border-left:none;"><a href="/category-33.html">西湖龙井</a>|</li>
                    <li><a href="/category-17.html">碧螺春</a>|</li>
                    <li><a href="/category-100.html">黄山毛峰</a>|</li>
                    <li><a href="/category-133.html">太平猴魁</a>|</li>
                    <li><a href="/category-126.html">六安瓜片</a>|</li>
                    <li><a href="/category-135.html">竹叶青</a>|</li>
                    <li><a href="/category-140.html">安吉白茶</a>|</li>
                    <li><a href="/category-145.html">蒙顶甘露</a></li>
                    <li class="more"><a target="_blank" href="/category-12.html">查看更多&gt;&gt;</a></li>
                </ul>
            </div>
      </header>
      <section class="goods_table">
        <article class="goods_leftgg">
        	<div class="slide">
    			<div class="FocusPic" id="lv">
            		<div class="changeDiv">
            			<a href="#"><img src="__PUBLIC__/images/bai1.jpg" /></a>
            			<a href="#"><img src="__PUBLIC__/images/bai2.jpg" /></a>
            		</div>
    			</div>
			</div>
            <script type="text/javascript"> 
				$(function(){
					new slide("#lv","cur",265,420,1);//焦点图
				})
				function $jquery(id){return document.getElementById(id)};
			</script>
        </article>
        <article class="goods_list"> 
        	<ul>
            	<li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="__PUBLIC__/images/白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="__PUBLIC__/images/白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
            </ul>
        </article>
      </section>
    </section>
<!--------------------------------红茶---------------------------------------->
    <section>
      <header class="productAreaHead">
        <h1> 红茶 </h1>
        	<div class="moreProduct">
                <ul>
                    <li style="border-left:none;"><a href="/category-110.html">正山小种</a></li>
                    <li><a href="/category-42.html">祁门红茶</a></li>
                    <li><a href="/category-139.html">金骏眉</a></li>
                    <li><a href="/category-22.html">云南滇红</a></li>
                    <li><a href="/category-143.html">白琳功夫</a></li>
                    <li><a href="/category-43.html">坦洋工夫</a></li>
                    <li><a href="/category-167.html">川红工夫</a></li>
                    <li class="more"><a target="_blank" href="/category-14.html">查看更多&gt;&gt;</a></li>
                </ul>
            </div>
      </header>
      <section class="goods_table">
        <article class="goods_leftgg">
        	<div class="slide">
    			<div class="FocusPic" id="hong">
            		<div class="changeDiv">
            			<a href="#"><img src="bai1.jpg" /></a>
            			<a href="#"><img src="bai2.jpg" /></a>
            		</div>
    			</div>
			</div>
            <script type="text/javascript"> 
				$(function(){
					new slide("#hong","cur",265,420,1);//焦点图
				})
				function $jquery(id){return document.getElementById(id)};
			</script>
        </article>
        <article class="goods_list"> 
        	<ul>
            	<li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
            </ul>
        </article>
      </section>
    </section>
<!-------------------------白茶-------------------------------------->
<section>
      <header class="productAreaHead">
        <h1> 白茶 </h1>
        	<div class="moreProduct">
                <ul>
                    <li style="border-left:none;"><a href="/category-32.html">白毫银针</a></li>
                    <li><a href="/category-101.html">白牡丹</a></li>
                    <li class="more"><a target="_blank" href="/category-25.html">查看更多&gt;&gt;</a></li>
                </ul>
            </div>
      </header>
      <section class="goods_table">
        <article class="goods_leftgg">
        	<div class="slide">
    			<div class="FocusPic" id="bai">
            		<div class="changeDiv">
            			<a href="#"><img src="bai1.jpg" /></a>
            			<a href="#"><img src="bai2.jpg" /></a>
            		</div>
    			</div>
			</div>
            <script type="text/javascript"> 
				$(function(){
					new slide("#bai","cur",265,420,1);//焦点图
				})
				function $jquery(id){return document.getElementById(id)};
			</script>
        </article>
        <article class="goods_list"> 
        	<ul>
            	<li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
            </ul>
        </article>
      </section>
    </section>
<!-------------------------黑茶-------------------------------------->
<section>
      <header class="productAreaHead">
        <h1> 黑茶 </h1>
        	<div class="moreProduct">
                <ul>
                    <li style="border-left:none;"><a href="/category-113.html">安化黑茶</a></li>
                    <li><a href="/category-156.html">泾渭茯茶</a></li>
                    <li><a href="/category-28.html">普洱茶</a></li>
                    <li class="more"><a target="_blank" href="/category-27.html">查看更多&gt;&gt;</a></li>
                </ul>
            </div>
      </header>
      <section class="goods_table">
        <article class="goods_leftgg">
        	<div class="slide">
    			<div class="FocusPic" id="hei">
            		<div class="changeDiv">
            			<a href="#"><img src="bai1.jpg" /></a>
            			<a href="#"><img src="bai2.jpg" /></a>
            		</div>
    			</div>
			</div>
            <script type="text/javascript"> 
				$(function(){
					new slide("#hei","cur",265,420,1);//焦点图
				})
				function $jquery(id){return document.getElementById(id)};
			</script>
        </article>
        <article class="goods_list"> 
        	<ul>
            	<li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
            </ul>
        </article>
      </section>
    </section>
<!-------------------------乌龙茶-------------------------------------->
<section>
      <header class="productAreaHead">
        <h1> 乌龙茶 </h1>
        	<div class="moreProduct">
                <ul>
                    <li style="border-left:none;"><a href="/category-18.html">安溪铁观音</a></li>
                    <li><a href="/category-19.html">武夷大红袍</a></li>
                    <li><a href="/category-162.html">凤凰单枞</a></li>
                    <li><a href="/category-138.html">台湾乌龙茶</a></li>
                    <li class="more"><a target="_blank" href="/category-13.html">查看更多&gt;&gt;</a></li>
                </ul>
            </div>
      </header>
      <section class="goods_table">
        <article class="goods_leftgg">
        	<div class="slide">
    			<div class="FocusPic" id="wulong">
            		<div class="changeDiv">
            			<a href="#"><img src="bai1.jpg" /></a>
            			<a href="#"><img src="bai2.jpg" /></a>
            		</div>
    			</div>
			</div>
            <script type="text/javascript"> 
				$(function(){
					new slide("#wulong","cur",265,420,1);//焦点图
				})
				function $jquery(id){return document.getElementById(id)};
			</script>
        </article>
        <article class="goods_list"> 
        	<ul>
            	<li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
            </ul>
        </article>
      </section>
    </section>
<!--------------------------花草茶-------------------------------------->
<section>
      <header class="productAreaHead">
        <h1> 花草茶 </h1>
        	<div class="moreProduct">
                <ul>
                    <li style="border-left:none;"><a href="/category-170.html">茉莉花茶</a></li>
                    <li><a href="/category-153.html">苦荞茶</a></li>
                    <li class="more"><a target="_blank" href="/category-26.html">查看更多&gt;&gt;</a></li>
                </ul>
            </div>
      </header>
      <section class="goods_table">
        <article class="goods_leftgg">
        	<div class="slide">
    			<div class="FocusPic" id="hua">
            		<div class="changeDiv">
            			<a href="#"><img src="bai1.jpg" /></a>
            			<a href="#"><img src="bai2.jpg" /></a>
            		</div>
    			</div>
			</div>
            <script type="text/javascript"> 
				$(function(){
					new slide("#hua","cur",265,420,1);//焦点图
				})
				function $jquery(id){return document.getElementById(id)};
			</script>
        </article>
        <article class="goods_list"> 
        	<ul>
            	<li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
            </ul>
        </article>
      </section>
    </section>
<!---------------------------茶具------------------------------------>
<section>
      <header class="productAreaHead">
        <h1> 茶具 </h1>
        	<div class="moreProduct">
                <ul>
                    <li style="border-left:none;"><a href="/category-102.html">玻璃茶具</a></li>
                    <li><a href="/category-157.html">陶瓷茶具</a></li>
                    <li class="more"><a target="_blank" href="/category-30.html">查看更多&gt;&gt;</a></li>
                </ul>
            </div>
      </header>
      <section class="goods_table">
        <article class="goods_leftgg">
        	<div class="slide">
    			<div class="FocusPic" id="chaju">
            		<div class="changeDiv">
            			<a href="#"><img src="bai1.jpg" /></a>
            			<a href="#"><img src="bai2.jpg" /></a>
            		</div>
    			</div>
			</div>
            <script type="text/javascript"> 
				$(function(){
					new slide("#chaju","cur",265,420,1);//焦点图
				})
				function $jquery(id){return document.getElementById(id)};
			</script>
        </article>
        <article class="goods_list"> 
        	<ul>
            	<li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶10.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
                 <li class="onegoods"> 
                   <a class="img" target="_blank" href="goods-1004.html" title="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                   		<img src="白茶6.png" alt="【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶"> 
                    </a>                             
                    <p class="price"><strong>￥588元</strong> </p>
                    <p><a href="#">【谢裕大】太平猴魁一级200克礼盒装 茶道人生系列 悟 2012年新茶</a></p>         
                          
                 </li>
            </ul>
        </article>
      </section>
    </section>
  </div>
</div>
<!--**************************************************尾部******************************************************-->
<div id="foot"> 


<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/foot_public.css" />

<script type="text/javascript">
$(function(){
    $("body").Sonline({
        Position:"right",
        Top:180,
        Effect:false, 
        DefaultsOpen:false, 
        Qqlist:"800002599|售前,800002599|售后"
    });
});
</script>
</head>

<body>

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
<div class="footer"><a rel="nofollow" href="###" target="_blank">关于我们</a>|<a rel="nofollow" href="###" target="_blank">隐私申明</a>|<a rel="nofollow" href="###" target="_blank">成为供应商</a>|<a href="###" target="_blank">社区</a>|<a href="###" target="_blank">茶叶</a>|<a href="###" target="_blank">博客</a>|<a href="###" target="_blank">友情链接</a>|<a href="###" target="_blank">网站地图</a><br>
  <center>Copyright 2014 - 2015 浮生若茶  中山大学南方学院计算机（1）班出品  All Rights Reserved </center>
</div>
</div>

</div>

</body>
</html>