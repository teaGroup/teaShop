<?php if (!defined('THINK_PATH')) exit();?>
<link href="__PUBLIC__/css/h_style.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="__PUBLIC__/css/base.css" />
<script src="__PUBLIC__/js/jquery.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/js/head.js" type="text/javascript"></script>

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