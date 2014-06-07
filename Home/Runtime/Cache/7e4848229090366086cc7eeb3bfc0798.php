<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<meta charset="utf-8">
<head>
<title>浮生若茶</title>
<meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/css.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/slider.css" />

<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/Tab.js"></script>

<!--幻灯片-->
<script src="__PUBLIC__/js/jquery.seven.min.js"></script>
<script src="__PUBLIC__/js/jquery.easing.min.js"></script>
<link href="__PUBLIC__/css/sevenslider.css" rel="stylesheet" />
<link href="__PUBLIC__/css/skins/fullwidth.css" rel="stylesheet" />
</head>
<body>
<div id="head"> <link href="__PUBLIC__/css/h_style.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="__PUBLIC__/css/base.css" />
<script src="__PUBLIC__/js/head.js" type="text/javascript"></script>

<div class="topbar">
  <div class="topbar2">
    <div class="add_fav"> <a onclick="" href="###">浮生若茶--名牌正品茶叶、茶礼商城！</a> </div>
    <div class="login-info"> <font>欢迎光临！&nbsp;&nbsp;</font> </div>
    <div class="quick-menu2">
      <ul>
        <li><a title="我的帐户" href="__APP__/Order/query">我的帐户</a> </li>
        <li><a title="帮助中心" href="__PUBLIC__/help.htm" target="_blank">帮助中心</a> </li>
        <li>欢迎你，<font style="color:#B10A04;"><?php echo ($username); ?></font></li>
        <li><a href="__APP__/Public/logout">退出</a></li>
      </ul>
    </div>
  </div>
</div>


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
          <li style="padding-left:5px;"><a href="__APP__/Search/search/keywords/谢裕大">谢裕大</a> </li>
          <li style="padding-left:5px;"><a href="__APP__/Search/search/keywords/武夷星">武夷星</a></li>
          <li style="padding-left:5px;"><a href="__APP__/Search/search/keywords/怡清源">怡清源</a></li>
          <li style="padding-left:5px;"><a href="__APP__/Search/search/keywords/鑫基">鑫基</a></li>
          <li style="padding-left:5px;"><a href="__APP__/Search/search/keywords/绿雪芽">绿雪芽</a></li>
          <li style="padding-left:5px;"><a href="__APP__/Search/search/keywords/西湖龙井">西湖龙井</a></li>
          <li style="padding-left:5px;"><a href="__APP__/Search/search/keywords/黑茶">黑茶</a></li>
          <li style="padding-left:5px;"><a href="__APP__/Search/search/keywords/御牌">御牌</a></li>
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
               <!-- <p>  <a href="__APP__/Search/sortgoods/name/黄山毛峰">黄山毛峰</a> <a href="__APP__/Search/sortgoods/name/太平猴魁">太平猴魁</a> </p>-->
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
                  <dd> <a href="__APP__/Search/searchforwt/name/绿茶/wt1/0/wt2/100">2两以下</a> <a href="__APP__/Search/searchforwt/name/绿茶/wt1/100/wt2/250">2两-半斤</a> <a href="__APP__/Search/searchforwt/name/绿茶/wt1/250/wt2/500">半斤-1斤</a><a href="__APP__/Search/searchforwt/name/绿茶/wt1/500/wt2/1000">1斤-1公斤</a><a href="__APP__/Search/searchforwt/name/绿茶/wt1/1000/wt2/2000">1公斤以上</a></dd>
                </dl>
                <div class="fn-clear"></div>
                <dl>
                  <dt>价格</dt>
                  <dd> <a href="__APP__/Search/searchforprice/name/绿茶/price1/0/price2/100">100元以内</a> <a href="__APP__/Search/searchforprice/name/绿茶/price1/101/price2/300">101-300元</a> <a href="__APP__/Search/searchforprice/name/绿茶/price1/301/price2/500">301-500元</a> <a href="__APP__/Search/searchforprice/name/绿茶/price1/501/price2/800">501-800元</a> <a href="__APP__/Search/searchforprice/name/绿茶/price1/800/price2/100000">800以上</a></dd>
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
                <!--<p>  <a href="__APP__/Search/sortgoods/name/台湾乌龙茶">台湾乌龙茶</a> <a href="__APP__/Search/sortgoods/name/凤凰单纵">凤凰单纵</a> </p>-->
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
                  <dd> <a href="__APP__/Search/searchforwt/name/乌龙茶/wt1/0/wt2/100">2两以下</a> <a href="__APP__/Search/searchforwt/name/乌龙茶/wt1/100/wt2/250">2两-半斤</a> <a href="__APP__/Search/searchforwt/name/乌龙茶/wt1/250/wt2/500">半斤-1斤</a><a href="__APP__/Search/searchforwt/name/乌龙茶/wt1/500/wt2/1000">1斤-1公斤</a><a href="__APP__/Search/searchforwt/name/乌龙茶/wt1/1000/wt2/2000">1公斤以上</a></dd>
                </dl>
                <div class="fn-clear"></div>
                <dl>
                  <dt>价格</dt>
                 <dd> <a href="__APP__/Search/searchforprice/name/乌龙茶/price1/0/price2/100">100元以内</a> <a href="__APP__/Search/searchforprice/name/乌龙茶/price1/101/price2/300">101-300元</a> <a href="__APP__/Search/searchforprice/name/乌龙茶/price1/301/price2/500">301-500元</a> <a href="__APP__/Search/searchforprice/name/乌龙茶/price1/501/price2/800">501-800元</a> <a href="__APP__/Search/searchforprice/name/乌龙茶/price1/800/price2/100000">800以上</a></dd>
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
              <!--  <p>  <a href="__APP__/Search/sortgoods/name/云南滇红">云南滇红</a> <a href="__APP__/Search/sortgoods/name/金骏眉">金骏眉</a> </p>-->
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
                  <dd> <a href="__APP__/Search/searchforwt/name/红茶/wt1/0/wt2/100">2两以下</a> <a href="__APP__/Search/searchforwt/name/红茶/wt1/100/wt2/250">2两-半斤</a> <a href="__APP__/Search/searchforwt/name/红茶/wt1/250/wt2/500">半斤-1斤</a><a href="__APP__/Search/searchforwt/name/红茶/wt1/500/wt2/1000">1斤-1公斤</a><a href="__APP__/Search/searchforwt/name/红茶/wt1/1000/wt2/2000">1公斤以上</a></dd>
                </dl>
                <div class="fn-clear"></div>
                <dl>
                  <dt>价格</dt>
                  <dd> <a href="__APP__/Search/searchforprice/name/红茶/price1/0/price2/100">100元以内</a> <a href="__APP__/Search/searchforprice/name/红茶/price1/101/price2/300">101-300元</a> <a href="__APP__/Search/searchforprice/name/红茶/price1/301/price2/500">301-500元</a> <a href="__APP__/Search/searchforprice/name/红茶/price1/501/price2/800">501-800元</a> <a href="__APP__/Search/searchforprice/name/红茶/price1/800/price2/100000">800以上</a></dd>
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
               <!-- <p>  <a href="__APP__/Search/sortgoods/name/泾渭茯茶">泾渭茯茶</a> </p>-->
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
                  <dd> <a href="__APP__/Search/searchforwt/name/黑茶/wt1/0/wt2/100">2两以下</a> <a href="__APP__/Search/searchforwt/name/黑茶/wt1/100/wt2/250">2两-半斤</a> <a href="__APP__/Search/searchforwt/name/黑茶/wt1/250/wt2/500">半斤-1斤</a><a href="__APP__/Search/searchforwt/name/黑茶/wt1/500/wt2/1000">1斤-1公斤</a><a href="__APP__/Search/searchforwt/name/黑茶/wt1/1000/wt2/2000">1公斤以上</a></dd>
                </dl>
                <div class="fn-clear"></div>
                <dl>
                  <dt>价格</dt>
                  <dd> <a href="__APP__/Search/searchforprice/name/黑茶/price1/0/price2/100">100元以内</a> <a href="__APP__/Search/searchforprice/name/黑茶/price1/101/price2/300">101-300元</a> <a href="__APP__/Search/searchforprice/name/黑茶/price1/301/price2/500">301-500元</a> <a href="__APP__/Search/searchforprice/name/黑茶/price1/501/price2/800">501-800元</a> <a href="__APP__/Search/searchforprice/name//price1/800/price2/100000">800以上</a></dd>
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
                  <dd> <a href="__APP__/Search/searchforwt/name/白茶/wt1/0/wt2/100">2两以下</a> <a href="__APP__/Search/searchforwt/name/白茶/wt1/100/wt2/250">2两-半斤</a> <a href="__APP__/Search/searchforwt/name/白茶/wt1/250/wt2/500">半斤-1斤</a><a href="__APP__/Search/searchforwt/name/白茶/wt1/500/wt2/1000">1斤-1公斤</a><a href="__APP__/Search/searchforwt/name/白茶/wt1/1000/wt2/2000">1公斤以上</a></dd>
                </dl>
                <div class="fn-clear"></div>
                <dl>
                  <dt>价格</dt>
                  <dd> <a href="__APP__/Search/searchforprice/name/白茶/price1/0/price2/100">100元以内</a> <a href="__APP__/Search/searchforprice/name/白茶/price1/101/price2/300">101-300元</a> <a href="__APP__/Search/searchforprice/name/白茶/price1/301/price2/500">301-500元</a> <a href="__APP__/Search/searchforprice/name/白茶/price1/501/price2/800">501-800元</a> <a href="__APP__/Search/searchforprice/name/白茶/price1/800/price2/100000">800以上</a></dd>
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
                <!--<p>  <a href="__APP__/Search/sortgoods/name/水果茶">水果茶</a> <a href="__APP__/Search/sortgoods/name/苦丁茶">苦丁茶</a> </p>-->
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
                 <dd> <a href="__APP__/Search/searchforwt/name/花草茶/wt1/0/wt2/100">2两以下</a> <a href="__APP__/Search/searchforwt/name/花草茶/wt1/100/wt2/250">2两-半斤</a> <a href="__APP__/Search/searchforwt/name/花草茶/wt1/250/wt2/500">半斤-1斤</a><a href="__APP__/Search/searchforwt/name/花草茶/wt1/500/wt2/1000">1斤-1公斤</a><a href="__APP__/Search/searchforwt/name/花草茶/wt1/1000/wt2/2000">1公斤以上</a></dd>
                </dl>
                <div class="fn-clear"></div>
                <dl>
                  <dt>价格</dt>
                  <dd> <a href="__APP__/Search/searchforprice/name/花草茶/price1/0/price2/100">100元以内</a> <a href="__APP__/Search/searchforprice/name/花草茶/price1/101/price2/300">101-300元</a> <a href="__APP__/Search/searchforprice/name/花草茶/price1/301/price2/500">301-500元</a> <a href="__APP__/Search/searchforprice/name/花草茶/price1/501/price2/800">501-800元</a> <a href="__APP__/Search/searchforprice/name/花草茶/price1/800/price2/100000">800以上</a></dd>
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
               <!-- <p>  <a href="__APP__/Search/sortgoods/name/紫砂茶具">紫砂茶具</a> <a href="__APP__/Search/sortgoods/name/电茶壶">电茶壶</a> </p>-->
              </div>
            </div>
            <div class="list-item hide">
              <ul class="itemleft">
                <dl>
                  <dt>茶具</dt>
                  <dd> <a href="__APP__/Search/sortgoods/name/玻璃茶具">玻璃茶具</a> <a href="__APP__/Search/sortgoods/name/陶瓷茶具">陶瓷茶具</a> <a href="__APP__/Search/sortgoods/name/紫砂茶具">紫砂茶具</a> <a href="__APP__/Search/sortgoods/name/电茶壶">电茶壶</a><a href="__APP__/Search/sortgoods/name/茶盘"></a><a href="__APP__/Search/sortgoods/name/茶宠">茶宠</a><a href="__APP__/Search/sortgoods/name/其他茶具">其他茶具</a></dd>
                </dl>
                <div class="fn-clear"></div>
                  <dt>价格</dt>
                  <dd> <a href="__APP__/Search/searchforprice/name/茶具/price1/0/price2/100">100元以内</a> <a href="__APP__/Search/searchforprice/name/茶具/price1/101/price2/300">101-300元</a> <a href="__APP__/Search/searchforprice/name/茶具/price1/301/price2/500">301-500元</a> <a href="__APP__/Search/searchforprice/name/茶具/price1/501/price2/800">501-800元</a> <a href="__APP__/Search/searchforprice/name/茶具/price1/800/price2/100000">800以上</a></dd>
                </dl>
                <div class="fn-clear"></div>
              </ul>
            </div>
          </li>
          <li style="border-top: none;">
            <div class="cate-tag"> <strong><a href="http://www.jq-school.com">价格</a></strong>
              <div class="listModel">
                <p> <a href="__APP__/Search/searchbyprice/price1/0/price2/100">100元以内</a> <a href="__APP__/Search/searchbyprice/price1/101/price2/300">101-300元</a></p>
                <p>  <a href="__APP__/Search/searchbyprice/price1/301/price2/500">301-500元</a> <a href="__APP__/Search/searchbyprice/price1/500/price2/800">501-800元</a> </p>
              </div>
            </div>
          </li>
          <li>
            <div class="float-list-dnav"> <a href="#">新品</a> <a href="#">清仓</a> <a href="#">多买优惠</a> </div>
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
<!--**************************************************flash******************************************************-->
<div id="flash">
  <script type="text/javascript" language="javascript">
  $(document).ready(function(){
    var tb=$(".seven_container").sevenslider({
      width:774,
      height:510,
      fullwidth:true,animation:0,automation:true,autointerval:3,progress:false,progresstype:"linear",bullet:true,carousel:false,circular:true,responsive:true,swipe:true,keyboard:true,skin:"fullwidth",lightbox:true    });

  });
  </script> 
      <div class="seven_container">
            <div id="seven_viewport">
                <div class="seven_slider">
                    <div class="seven_slide"><a class="seven_slide_title">春来品茗</a><img src="__PUBLIC__/images/adPic/1.jpg" /></div>
                    <div class="seven_slide"><a class="seven_slide_title">藏茶</a><img src="__PUBLIC__/images/adPic/2.jpg" /></div>
                    <div class="seven_slide"><a class="seven_slide_title">红茶专场</a><img src="__PUBLIC__/images/adPic/3.jpg" /></div>
                </div>
            </div>
            <a id="left_btn" class="seven_nav">Previous Slide</a>
            <a id="right_btn" class="seven_nav right_btn">Next Slide</a>
  </div>
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
              <?php if(is_array($newgoods)): $i = 0; $__LIST__ = $newgoods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="onegoods"> <a target="_blank" href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>"><img src="<?php echo ($vo["Goods_img"]); ?>"></a>
                  <p class="price"><strong>￥<?php echo ($vo["Goods_Price"]); ?>元</strong></p>
                  <p><a target="_blank" href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>"><?php echo ($vo["Goods_Name"]); ?></a></p>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="tab-con-item">
              <?php if(is_array($hotgoods)): $i = 0; $__LIST__ = $hotgoods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="onegoods"> <a target="_blank" href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>"><img src="<?php echo ($vo["Goods_img"]); ?>"></a>
                  <p class="price"><strong>￥<?php echo ($vo["Goods_Price"]); ?>元</strong></p>
                  <p><a target="_blank" href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>"><?php echo ($vo["Goods_Name"]); ?></a></p>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="tab-con-item">
              <?php if(is_array($jbchaju)): $i = 0; $__LIST__ = $jbchaju;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="onegoods"> <a target="_blank" href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>"><img src="<?php echo ($vo["Goods_img"]); ?>"></a>
                  <p class="price"><strong>￥<?php echo ($vo["Goods_Price"]); ?>元</strong></p>
                  <p><a target="_blank" href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>"><?php echo ($vo["Goods_Name"]); ?></a></p>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <div class="tab-con-item">
              <?php if(is_array($gift)): $i = 0; $__LIST__ = $gift;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="onegoods"> <a target="_blank" href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>"><img src="<?php echo ($vo["Goods_img"]); ?>"></a>
                  <p class="price"><strong>￥<?php echo ($vo["Goods_Price"]); ?>元</strong></p>
                  <p><a target="_blank" href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>"><?php echo ($vo["Goods_Name"]); ?></a></p>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
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
          <?php if(is_array($rankingW)): $i = 0; $__LIST__ = array_slice($rankingW,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="first">
              <em class="bg1">1</em>
                  <img src="<?php echo ($vo["Goods_img"]); ?>" style="display: block; ">
              <a  href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>" target="_blank"><?php echo ($vo["Goods_Name"]); ?></a><br />        
              <span class="f1" style="display: inline; ">￥</span><span class="f2" style="display: inline; "><?php echo ($vo["Goods_Price"]); ?></span>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
         
          <?php if(is_array($rankingW)): $i = 0; $__LIST__ = array_slice($rankingW,1,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="">
              <em class="bg2">2</em>
              <img src="<?php echo ($vo["Goods_img"]); ?>" style="display: none; ">
              <a href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>" target="_blank"><?php echo ($vo["Goods_Name"]); ?></a>  <br />      
              <span class="f1" style="display: none; ">￥</span><span class="f2" style="display: none; "><?php echo ($vo["Goods_Price"]); ?></span>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
         
          <?php if(is_array($rankingW)): $i = 0; $__LIST__ = array_slice($rankingW,2,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="">
              <em class="bg3">3</em>
              <img src="<?php echo ($vo["Goods_img"]); ?>"  style="display: none; ">
              <a href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>" target="_blank"><?php echo ($vo["Goods_Name"]); ?></a><br />       
              <span class="f1" style="display: none; ">￥</span><span class="f2" style="display: none; "><?php echo ($vo["Goods_Price"]); ?></span>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
         
          <?php if(is_array($rankingW)): $i = 0; $__LIST__ = array_slice($rankingW,3,null,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="">
              <em><?php echo ($key+1); ?></em>
              <img src="<?php echo ($vo["Goods_img"]); ?>" style="display: none; ">
              <a href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>" target="_blank"><?php echo ($vo["Goods_Name"]); ?></a><br />        
              <span class="f1" style="display: none; ">￥</span><span class="f2" style="display: none; "><?php echo ($vo["Goods_Price"]); ?></span>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>  
      </div>
      <div class="tab-con-item">
      <div class="numlist" id="numtext">
        <ul>
          <?php if(is_array($rankingM)): $i = 0; $__LIST__ = array_slice($rankingM,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="first">
              <em class="bg1">1</em>
                  <img src="<?php echo ($vo["Goods_img"]); ?>" style="display: block; ">
              <a href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>" target="_blank"><?php echo ($vo["Goods_Name"]); ?></a><br />        
              <span class="f1" style="display: inline; ">￥</span><span class="f2" style="display: inline; "><?php echo ($vo["Goods_Price"]); ?></span>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
         
          <?php if(is_array($rankingM)): $i = 0; $__LIST__ = array_slice($rankingM,1,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="">
              <em class="bg2">2</em>
              <img src="<?php echo ($vo["Goods_img"]); ?>" style="display: none; ">
              <a href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>" target="_blank"><?php echo ($vo["Goods_Name"]); ?></a>  <br />      
              <span class="f1" style="display: none; ">￥</span><span class="f2" style="display: none; "><?php echo ($vo["Goods_Price"]); ?></span>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
         
          <?php if(is_array($rankingM)): $i = 0; $__LIST__ = array_slice($rankingM,2,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="">
              <em class="bg3">3</em>
              <img src="<?php echo ($vo["Goods_img"]); ?>"  style="display: none; ">
              <a href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>" target="_blank"><?php echo ($vo["Goods_Name"]); ?></a><br />       
              <span class="f1" style="display: none; ">￥</span><span class="f2" style="display: none; "><?php echo ($vo["Goods_Price"]); ?></span>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
         
          <?php if(is_array($rankingM)): $i = 0; $__LIST__ = array_slice($rankingM,3,null,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="">
              <em><?php echo ($key+1); ?></em>
              <img src="<?php echo ($vo["Goods_img"]); ?>" style="display: none; ">
              <a href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>" target="_blank"><?php echo ($vo["Goods_Name"]); ?></a><br />        
              <span class="f1" style="display: none; ">￥</span><span class="f2" style="display: none; "><?php echo ($vo["Goods_Price"]); ?></span>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
      </div>
      <div class="tab-con-item">
      <div class="numlist" id="numtext">
        <ul>
          <?php if(is_array($rankingY)): $i = 0; $__LIST__ = array_slice($rankingY,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="first">
              <em class="bg1">1</em>
                  <img src="<?php echo ($vo["Goods_img"]); ?>" style="display: block; ">
              <a href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>" target="_blank"><?php echo ($vo["Goods_Name"]); ?></a><br />        
              <span class="f1" style="display: inline; ">￥</span><span class="f2" style="display: inline; "><?php echo ($vo["Goods_Price"]); ?></span>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
         
          <?php if(is_array($rankingY)): $i = 0; $__LIST__ = array_slice($rankingY,1,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="">
              <em class="bg2">2</em>
              <img src="<?php echo ($vo["Goods_img"]); ?>" style="display: none; ">
              <a href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>" target="_blank"><?php echo ($vo["Goods_Name"]); ?></a>  <br />      
              <span class="f1" style="display: none; ">￥</span><span class="f2" style="display: none; "><?php echo ($vo["Goods_Price"]); ?></span>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
         
          <?php if(is_array($rankingY)): $i = 0; $__LIST__ = array_slice($rankingY,2,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="">
              <em class="bg3">3</em>
              <img src="<?php echo ($vo["Goods_img"]); ?>"  style="display: none; ">
              <a href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>" target="_blank"><?php echo ($vo["Goods_Name"]); ?></a><br />       
              <span class="f1" style="display: none; ">￥</span><span class="f2" style="display: none; "><?php echo ($vo["Goods_Price"]); ?></span>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
         
          <?php if(is_array($rankingY)): $i = 0; $__LIST__ = array_slice($rankingY,3,null,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="">
              <em><?php echo ($key+1); ?></em>
              <img src="<?php echo ($vo["Goods_img"]); ?>" style="display: none; ">
              <a href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>" target="_blank"><?php echo ($vo["Goods_Name"]); ?></a><br />        
              <span class="f1" style="display: none; ">￥</span><span class="f2" style="display: none; "><?php echo ($vo["Goods_Price"]); ?></span>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
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
                    <li class="more"><a target="_blank" href="__APP__/More/index/name/green">查看更多&gt;&gt;</a></li>
                </ul>
            </div>
      </header>
      <section class="goods_table">
        <article class="goods_leftgg">
          <div class="slide">
          <div class="FocusPic" id="lv">
                <div class="changeDiv">
                  <a href="#"><img src="__PUBLIC__/images/adPic/lv1.jpg" /></a>
                  <a href="#"><img src="__PUBLIC__/images/adPic/lv2.jpg" /></a>
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
            <?php if(is_array($lv)): $i = 0; $__LIST__ = $lv;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="onegoods"> 
                   <a class="img" target="_blank" href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>" title="<?php echo ($vo["Goods_Name"]); ?>"> 
                      <img src="<?php echo ($vo["Goods_img"]); ?>" alt="<?php echo ($vo["Goods_Name"]); ?>"> 
                    </a>                             
                    <p class="price"><strong>￥<?php echo ($vo["Goods_Price"]); ?>元</strong> </p>
                    <p><a target="_blank" href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>"><?php echo ($vo["Goods_Name"]); ?></a></p>               
              </li><?php endforeach; endif; else: echo "" ;endif; ?>    
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
                    <li class="more"><a target="_blank" href="__APP__/More/index/name/red">查看更多&gt;&gt;</a></li>
                </ul>
            </div>
      </header>
      <section class="goods_table">
        <article class="goods_leftgg">
          <div class="slide">
          <div class="FocusPic" id="hong">
                <div class="changeDiv">
                  <a href="#"><img src="__PUBLIC__/images/adPic/hong1.jpg" /></a>
                  <a href="#"><img src="__PUBLIC__/images/adPic/hong2.jpg" /></a>
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
            <?php if(is_array($hong)): $i = 0; $__LIST__ = $hong;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="onegoods"> 
                   <a class="img" target="_blank" href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>" title="<?php echo ($vo["Goods_Name"]); ?>"> 
                      <img src="<?php echo ($vo["Goods_img"]); ?>" alt="<?php echo ($vo["Goods_Name"]); ?>"> 
                    </a>                             
                    <p class="price"><strong>￥<?php echo ($vo["Goods_Price"]); ?>元</strong> </p>
                    <p><a target="_blank" href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>"><?php echo ($vo["Goods_Name"]); ?></a></p>               
              </li><?php endforeach; endif; else: echo "" ;endif; ?>   
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
                    <li class="more"><a target="_blank" href="__APP__/More/index/name/white">查看更多&gt;&gt;</a></li>
                </ul>
            </div>
      </header>
      <section class="goods_table">
        <article class="goods_leftgg">
          <div class="slide">
          <div class="FocusPic" id="bai">
                <div class="changeDiv">
                  <a href="#"><img src="__PUBLIC__/images/adPic/bai1.jpg" /></a>
                  <a href="#"><img src="__PUBLIC__/images/adPic/bai2.jpg" /></a>
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
            <?php if(is_array($bai)): $i = 0; $__LIST__ = $bai;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="onegoods"> 
                   <a class="img" target="_blank" href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>" title="<?php echo ($vo["Goods_Name"]); ?>"> 
                      <img src="<?php echo ($vo["Goods_img"]); ?>" alt="<?php echo ($vo["Goods_Name"]); ?>"> 
                    </a>                             
                    <p class="price"><strong>￥<?php echo ($vo["Goods_Price"]); ?>元</strong> </p>
                    <p><a target="_blank" href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>"><?php echo ($vo["Goods_Name"]); ?></a></p>               
              </li><?php endforeach; endif; else: echo "" ;endif; ?>  
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
                    <li class="more"><a target="_blank" href="__APP__/More/index/name/black">查看更多&gt;&gt;</a></li>
                </ul>
            </div>
      </header>
      <section class="goods_table">
        <article class="goods_leftgg">
          <div class="slide">
          <div class="FocusPic" id="hei">
                <div class="changeDiv">
                  <a href="#"><img src="__PUBLIC__/images/adPic/hei1.jpg" /></a>
                  <a href="#"><img src="__PUBLIC__/images/adPic/hei2.jpg" /></a>
                  <a href="#"><img src="__PUBLIC__/images/adPic/hei3.jpg" /></a>
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
            <?php if(is_array($hei)): $i = 0; $__LIST__ = $hei;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="onegoods"> 
                   <a class="img" target="_blank" href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>" title="<?php echo ($vo["Goods_Name"]); ?>"> 
                      <img src="<?php echo ($vo["Goods_img"]); ?>" alt="<?php echo ($vo["Goods_Name"]); ?>"> 
                    </a>                             
                    <p class="price"><strong>￥<?php echo ($vo["Goods_Price"]); ?>元</strong> </p>
                    <p><a target="_blank" href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>"><?php echo ($vo["Goods_Name"]); ?></a></p>               
              </li><?php endforeach; endif; else: echo "" ;endif; ?>   
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
                    <li class="more"><a target="_blank" href="__APP__/More/index/name/wulong">查看更多&gt;&gt;</a></li>
                </ul>
            </div>
      </header>
      <section class="goods_table">
        <article class="goods_leftgg">
          <div class="slide">
          <div class="FocusPic" id="wulong">
                <div class="changeDiv">
                  <a href="#"><img src="__PUBLIC__/images/adPic/wu1.jpg" /></a>
                  <a href="#"><img src="__PUBLIC__/images/adPic/wu2.jpg" /></a>
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
            <?php if(is_array($wu)): $i = 0; $__LIST__ = $wu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="onegoods"> 
                   <a class="img" target="_blank" href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>" title="<?php echo ($vo["Goods_Name"]); ?>"> 
                      <img src="<?php echo ($vo["Goods_img"]); ?>" alt="<?php echo ($vo["Goods_Name"]); ?>"> 
                    </a>                             
                    <p class="price"><strong>￥<?php echo ($vo["Goods_Price"]); ?>元</strong> </p>
                    <p><a target="_blank" href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>"><?php echo ($vo["Goods_Name"]); ?></a></p>               
              </li><?php endforeach; endif; else: echo "" ;endif; ?>     
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
                    <li class="more"><a target="_blank" href="__APP__/More/index/name/flower">查看更多&gt;&gt;</a></li>
                </ul>
            </div>
      </header>
      <section class="goods_table">
        <article class="goods_leftgg">
          <div class="slide">
          <div class="FocusPic" id="hua">
                <div class="changeDiv">
                  <a href="#"><img src="__PUBLIC__/images/adPic/hua1.jpg" /></a>
                  <a href="#"><img src="__PUBLIC__/images/adPic/hua2.jpg" /></a>
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
            <?php if(is_array($hua)): $i = 0; $__LIST__ = $hua;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="onegoods"> 
                   <a class="img" target="_blank" href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>" title="<?php echo ($vo["Goods_Name"]); ?>"> 
                      <img src="<?php echo ($vo["Goods_img"]); ?>" alt="<?php echo ($vo["Goods_Name"]); ?>"> 
                    </a>                             
                    <p class="price"><strong>￥<?php echo ($vo["Goods_Price"]); ?>元</strong> </p>
                    <p><a target="_blank" href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>"><?php echo ($vo["Goods_Name"]); ?></a></p>               
              </li><?php endforeach; endif; else: echo "" ;endif; ?>     
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
                    <li class="more"><a target="_blank" href="__APP__/More/index/name/chaju">查看更多&gt;&gt;</a></li>
                </ul>
            </div>
      </header>
      <section class="goods_table">
        <article class="goods_leftgg">
          <div class="slide">
          <div class="FocusPic" id="chaju">
                <div class="changeDiv">
                  <a href="#"><img src="__PUBLIC__/images/adPic/chaju1.jpg" /></a>
                  <a href="#"><img src="__PUBLIC__/images/adPic/chaju2.jpg" /></a>
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
            <?php if(is_array($chaju)): $i = 0; $__LIST__ = $chaju;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="onegoods"> 
                   <a class="img" target="_blank" href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>" title="<?php echo ($vo["Goods_Name"]); ?>"> 
                      <img src="<?php echo ($vo["Goods_img"]); ?>" alt="<?php echo ($vo["Goods_Name"]); ?>"> 
                    </a>                             
                    <p class="price"><strong>￥<?php echo ($vo["Goods_Price"]); ?>元</strong> </p>
                    <p><a target="_blank" href="__APP__/GoodsInfo/index/goodsid/<?php echo ($vo["Goods_Id"]); ?>"><?php echo ($vo["Goods_Name"]); ?></a></p>               
              </li><?php endforeach; endif; else: echo "" ;endif; ?>     
          </ul>
        </article>
      </section>
    </section>
<!---------------------------新闻&公告------------------------------------> 
<section>
      <header class="productAreaHead">
      <h1></h1>
      </header>
      <section class="goods_table">
      	<section id="con">
            
      		<section class="hot_news">
           	  <header class="hn_head">
                <center><h2>热点新闻</h2></center>
              </header>
              <section id="table">
              <table width="99%" cellpadding="2px" cellspacing="2px">
              <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                <td width="8%" height="32px"><img id="img" src="__PUBLIC__/images/hotnews.png"/></td>
                <td width="92%" height="32px" id="td"><a href="__APP__/Index/news/id/<?php echo (msubstr($vo["pk_News_Id"],0,28)); ?>"><?php echo ($vo["News_Title"]); ?></a></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
              <tfoot>
              	<div id="div" align="center"><div id="black"><?php echo ($show); ?></div></div>
              </tfoot>
              </table>
              </section>
       		</section>                       
        	<section class="notice">
              <header class="hn_head">
                <center><h2>商场公告</h2></center>
              </header>
              <section id="table">
              <table width="99%" cellpadding="2px" cellspacing="2px" >
              <?php if(is_array($notice)): $i = 0; $__LIST__ = $notice;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
              <td width="8%" height="32px"><img id="img" src="__PUBLIC__/images/notices.png"/></td>
              <td width="92%" height="32px" id="td"><a href="__APP__/Index/notice/id/<?php echo ($vo["pk_Notice_Id"]); ?>"><?php echo (msubstr($vo["Notice_Title"],0,28)); ?></a></td>
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
              <tfoot>
              	<div id="div" align="center"><div id="black"><?php echo ($show); ?></div></div>
              </tfoot>
              </table>

              </section>
        	</section>
           
        </section>
      </section>
</section>
  </div>
</div>
<!--**************************************************尾部******************************************************-->
<div id="foot"> 

<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/foot_public.css" />
<div class="help">
<div class="help_box">

<div class="help_mod">
<div class="help_mod_t">购物指南</div>
<div class="help_mod_c"><a rel="nofollow"  href="__PUBLIC__/help.htm" target="_blank">怎样购物</a></div>
<div class="help_mod_c"><a rel="nofollow"  href="__PUBLIC__/help.htm" target="_blank">积分政策</a></div>
<div class="help_mod_c"><a rel="nofollow"  href="__PUBLIC__/help.htm" target="_blank">会员优惠</a></div>
<div class="help_mod_c"><a rel="nofollow"  href="__PUBLIC__/help.htm" target="_blank">VIP企业用户</a></div>
<div class="help_mod_c"><a rel="nofollow"  href="__PUBLIC__/help.htm" target="_blank">订单状态解释</a></div>
</div>
<div class="help_mod">
<div class="help_mod_t">配送方式</div>
<div class="help_mod_c"><a rel="nofollow"  href="__PUBLIC__/help.htm" target="_blank">快递资费及送达时间</a></div>
<div class="help_mod_c"><a rel="nofollow"  href="__PUBLIC__/help.htm" target="_blank">快递覆盖地区查询</a></div>
<div class="help_mod_c"><a rel="nofollow"  href="__PUBLIC__/help.htm" target="_blank">验货与签收</a></div>
</div>
<div class="help_mod">
<div class="help_mod_t">支付方式</div>
<div class="help_mod_c"><a rel="nofollow"  href="__PUBLIC__/help.htm" target="_blank">货到付款</a></div>
<div class="help_mod_c"><a rel="nofollow"  href="__PUBLIC__/help.htm" target="_blank">支付宝</a></div>
<div class="help_mod_c"><a rel="nofollow"  href="__PUBLIC__/help.htm" target="_blank">财付通</a></div>
<div class="help_mod_c"><a rel="nofollow"  href="__PUBLIC__/help.htm" target="_blank">银行转账</a></div>
<div class="help_mod_c"><a rel="nofollow"  href="__PUBLIC__/help.htm" target="_blank">网银在线</a></div>
</div>
<div class="help_mod">
<div class="help_mod_t">售后服务</div>
<div class="help_mod_c"><a rel="nofollow"  href="__PUBLIC__/help.htm" target="_blank">退换货原则</a></div>
<div class="help_mod_c"><a rel="nofollow"  href="__PUBLIC__/help.htm" target="_blank">换货流程</a></div>
<div class="help_mod_c"><a rel="nofollow"  href="__PUBLIC__/help.htm" target="_blank">退货流程</a></div>
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