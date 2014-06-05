<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>商品详情</title>
<link href="__PUBLIC__/css/goodsinfo.css" rel="stylesheet" media="screen" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<SCRIPT src="__PUBLIC__/js/picBig/jquery-1.8.3.js" type=text/javascript></SCRIPT>
<SCRIPT src="__PUBLIC__/js/picBig/base.js" type=text/javascript></SCRIPT>
<script src="__PUBLIC__/js/onlineService.js" type="text/javascript"></script>

<style>
.btnbuy{
	background-image:__PUBLIC__/images/btnbuy.jpg;
}
</style>
</head>

<body>
<div id="head"><link href="__PUBLIC__/css/h_style.css" type="text/css" rel="stylesheet">
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
          <li style="padding-left:5px;"><a href="__APP__/Search/search/name/谢裕大">谢裕大</a> </li>
          <li style="padding-left:5px;"><a href="__APP__/Search/search/name/武夷星">武夷星</a></li>
          <li style="padding-left:5px;"><a href="__APP__/Search/search/name/怡清源">怡清源</a></li>
          <li style="padding-left:5px;"><a href="__APP__/Search/search/name/鑫基">鑫基</a></li>
          <li style="padding-left:5px;"><a href="__APP__/Search/search/name/绿雪芽">绿雪芽</a></li>
          <li style="padding-left:5px;"><a href="__APP__/Search/search/name/西湖龙井">西湖龙井</a></li>
          <li style="padding-left:5px;"><a href="__APP__/Search/search/name/黑茶">黑茶</a></li>
          <li style="padding-left:5px;"><a href="__APP__/Search/search/name/御牌">御牌</a></li>
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
<div id="container">
<div class="inner">
          <div id="good">
               <div id="crumb">
               	<a href="__APP__/Index/index">首页</a>
				<span>»</span>
				<a href=""><?php echo ($list[0][Classifi_Name]); ?></a>
				<span>»</span>
				<a href="/"><?php echo ($list[0][Goods_Name]); ?></a>									
               </div>
<div class="images">
<div id="preview">
	<div class="jqzoom" id="spec-n1"><IMG height=350 src="<?php echo ($list[0]["Goods_img"]); ?>" jqimg="<?php echo ($list[0]["Goods_img"]); ?>" width=398>
	</div>
	<div id="spec-n5">
		<div id="spec-list">
			<ul class="list-h">
				<li><img src="<?php echo ($list[0]["Goods_img"]); ?>"> </li>
                <?php if($list[0][Goods_img1] != null): ?><li><img src="<?php echo ($list[0]["Goods_img1"]); ?>"> </li><?php endif; ?>
                <?php if($list[0][Goods_img2] != null): ?><li><img src="<?php echo ($list[0]["Goods_img2"]); ?>"> </li><?php endif; ?>
                <?php if($list[0][Goods_img3] != null): ?><li><img src="<?php echo ($list[0]["Goods_img3"]); ?>"> </li><?php endif; ?>
			</ul>
		</div>

		
    </div>
</div>
<SCRIPT type=text/javascript>
	$(function(){			
	   $(".jqzoom").jqueryzoom({
			xzoom:400,
			yzoom:400,
			offset:10,
			position:"right",
			preload:1,
			lens:1
		});
		$("#spec-list").jdMarquee({
			deriction:"left",
			width:398,
			height:56,

		});
		$("#spec-list img").bind("mouseover",function(){
			var src=$(this).attr("src");
			$("#spec-n1 img").eq(0).attr({
				src:src.replace("\/n5\/","\/n1\/"),
				jqimg:src.replace("\/n5\/","\/n0\/")
			});
			$(this).css({
				"border":"2px solid #ff6600",
				"padding":"1px"
			});
		}).bind("mouseout",function(){
			$(this).css({
				"border":"1px solid #ccc",
				"padding":"2px"
			});
		});		
	})
	</SCRIPT>

<SCRIPT src="__PUBLIC__/js/picBig/lib.js" type=text/javascript></SCRIPT>
<SCRIPT src="__PUBLIC__/js/picBig/keleyi.js" type=text/javascript></SCRIPT>
</div>
                <div class="good_info">
				<h1><span style="color:#F00;">【2014新茶】</span>
				<?php if($list[0][Goods_Num] > 0): ?>【现货】
				<?php else: ?>
				【暂缺】<?php endif; echo ($list[0]["Goods_Name"]); ?>
				</h1><br/>
                	<dl>
                        <dd>商品编号：<?php echo ($list[0]['pk_Goodsinfo_Id']); ?></dd>
                        <dd id="ECS_G_PRICE">
                          <span class="fl">现　　价：</span>
                   		  <span class="yahei">￥<strong class="good_pri"><?php echo ($list[0][Goods_Price]); ?></strong></span></dd>
                        <dd id="ECS_G_COMMENT">
							<span class="fl">库　　存：</span>
							<span><?php echo ($list[0][Goods_Num]); ?>件</span>
							<span class="pinglun" style="display:none;">（<a href="#comment">已有237人评论</a>）</span>
					</dd>
                    </dl>
                    <div class="good_pinpai">
                    	  <ul>
                    		<li>销售量：<?php echo ($list[0][Goods_SellNum]); ?>件</li>
                    		<li>赠送积分：<?php echo ($list[0][Goods_RewardCred]); ?>分</li>
                    		<li>产品单位：<?php echo ($list[0][Goods_Unit]); ?></li>
                    		<li>净含量：<?php echo ($list[0][Goods_NetContent]); ?>克</li>
                    	  </ul>
                        <div class="cb"></div>
				</div>
                    <div class="good_tobuy">
					<form action="__APP__/Cart/add" name="buybox" id="buybox" method="post">
						<div class="buy_bum">
							<span class="fl">我要买：</span>
							<div class="good_numall">
							  
                                <input type="number" value="1" class="good_num" name="item_number">
							</div>
							<div class="cb"></div>
							<p class="p_buybtn">
                            	<input type="hidden" name="goodsid" value="<?php echo ($list[0]['pk_Goodsinfo_Id']); ?>">
                                  <input type="image" src="__PUBLIC__/images/btnbuy.jpg" onClick="document.buybox.submit()" />	
							</p>
							<div class="cb"></div>
						</div>
					</form>
					<p class="baoyou">购物提示：普通快递满200元包邮，顺丰快递款到发货满300元包邮 <a href="/" target="_blank">详情点击</a></p>
				</div>
					<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
					<span class="bds_more">分享到：</span>
					<a class="bds_tsina" title="分享到新浪微博" href="#">新浪微博</a>
					<a class="bds_douban" title="分享到豆瓣网" href="#">豆瓣网</a>
					<a class="bds_sqq" title="分享到QQ好友" href="#">QQ好友</a>
					<a class="bds_qzone" title="分享到QQ空间" href="#">QQ空间</a>
					<a class="bds_mshare" title="分享到一键分享" href="#">一键分享</a>
					<a class="bds_copy" title="分享到复制网址" href="#">复制网址</a>
					<a class="bds_print" title="分享到打印" href="#">打印</a>
					</div>
					<script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=0" src="http://bdimg.share.baidu.com/static/js/bds_s_v2.js?cdnversion=388288"></script>
					
					<script type="text/javascript">
					document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
					</script>
					
                    
                </div>
          </div>
          <div class="cb"></div>
          <div id="good_sidebar">
				<div id="seealsobab" style="display: block;">
                      <div><h3 class="title">买过该商品的茶友还买过</h3>
                           <ul class="inner">
                                <li class="good_small">
                                     <a class="good_img fl" title="御牌" href="__APP__/GoodsInfo/index/goodsid/<?php echo ($other[0]['pk_Goodsinfo_Id']); ?>" target="_blank">
                                          <img width="70" height="70" src="<?php echo ($other[0][Goods_img]); ?>" alt="御牌" style="border: 0 none;"></a> 
                                     <a class="good_name" title="御牌" href="__APP__/GoodsInfo/index/goodsid/<?php echo ($other[0]['pk_Goodsinfo_Id']); ?>" target="_blank"><?php echo ($other[0][Goods_Name]); ?></a>                                     
                                     <span class="good_price"> ￥<?php echo ($other[0][Goods_Price]); ?> </span>
                                </li>
                            </ul>
                       </div>
                </div><!--/#seealsobab-->
				<div id="history">
					<div class="title"><a href="#" onclick="return mcw_clear_history();" class="pr10">清空</a>浏览记录</div>
					<div class="inner">
												<div class="good_small">
 							<a href="__APP__/GoodsInfo/index/goodsid/<?php echo ($other[1]['pk_Goodsinfo_Id']); ?>" target="_blank" class="good_img fl"><img src="<?php echo ($other[1][Goods_img]); ?>" height="70"></a>
 							<a href="__APP__/GoodsInfo/index/goodsid/<?php echo ($other[1]['pk_Goodsinfo_Id']); ?>" target="_blank" class="good_name">
							<?php if($other[1][Goods_Num] > 0): ?>【现货】
				               <?php else: ?>
				              【暂缺】<?php endif; echo ($other[1][Goods_Name]); ?></a>
 							<span class="good_price">￥<?php echo ($other[1][Goods_Price]); ?></span>
 						</div>
 											</div>
				</div><!--/#history-->
				<div id="seealsovav" style="display: block;">
                       <div>
                            <h3 class="title">看过该商品的茶友还看过</h3>
                                 <ul class="inner">
                                    <li class="good_small">
                                       <a class="good_img fl" title="张家山" href="__APP__/GoodsInfo/index/goodsid/<?php echo ($other[2]['pk_Goodsinfo_Id']); ?>" target="_blank">
                                               <img width="70" height="70" src="<?php echo ($other[2][Goods_img]); ?>" alt="张家山" style="border: 0 none;"></a> 
                                       <a class="good_name" title="张家山" href="__APP__/GoodsInfo/index/goodsid/<?php echo ($other[2]['pk_Goodsinfo_Id']); ?>" target="_blank"><?php echo ($other[2][Goods_Name]); ?></a> 
                                       <span class="good_price"> ￥<?php echo ($other[2][Goods_Price]); ?> </span>
                                    </li>
                                 </ul>
                       </div>
                </div><!--/#seealsovav-->
			</div><!---END good_sidebar-->
            <div id="good_detail">
                  <div class="arrow_tabs"><a href="#" class="active">商品详情</a>
			       <a href="__URL__/common_list/id/<?php echo ($list[0][pk_Goodsinfo_Id]); ?>" target="_blank">商品评论</a>
			   </div>
                  <div class="inner" style="display: block;">
					<div class="attrs clearfix mt10">
                          <div id="zi">
										<span style=" width:185px"><b>品牌：</b>张家山</span>
										<span style=" width:185px"><b>库存：</b>盒</span>
										<span style=" width:185px"><b>用途：</b>自饮</span>
										<span style=" width:185px"><b>上/下架：</b><?php if($list[0][Goods_IsSell] == 1): ?>是<?php else: ?>否<?php endif; ?></span>
										<span style=" width:185px"><b>类别：</b><?php echo ($list[0][Classifi_Name]); ?></span>
										<span style=" width:185px"><b>等级：</b>特一级</span>
										<span style=" width:185px"><b>赠送积分：</b><?php echo ($list[0][Goods_RewardCred]); ?>分</span>
										<span style=" width:185px"><b>产品单位：</b><?php echo ($list[0][Goods_Unit]); ?></span>
										<span style=" width:185px"><b>净重：</b><?php echo ($list[0][Goods_NetContent]); ?></span>
										<span style=" width:185px"><b>上市时间：</b><?php echo ($list[0][Goods_SellTime]); ?></span>
                           </div>
					</div>
					<div class="mt10 good_intro">
						<div class="title"></div>
						<div class="content">
							<p><?php echo ($list[0][Goods_Intro]); ?></p>
						</div><!--END content-->
					</div><!--mt10 good_intro-->
				</div><!---attrs clearfix mt10--->
            
            </div><!------inner---------->
     </div> <!---END inner-->
</div>
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

<div id="box-kefu">
    <div class="kefu-close"></div>
    <div class="kefu-open">
        <div>
        <ul>
            <li><a href="http://wpa.qq.com/msgrd?v=3&uin=1192835359&site=qq&menu=yes" target="_blank"><i class="qq"></i>在线客服1</a></li>
            <li><a href="http://wpa.qq.com/msgrd?v=3&uin=425528994&site=qq&menu=yes" target="_blank"><i class="qq"></i>在线客服2</a></li>
            <li><a href="http://wpa.qq.com/msgrd?v=3&uin=1234569871&site=qq&menu=yes" target="_blank"><i class="qq"></i>在线客服3</a></li>
        </ul>
        </div>
        <a href="javascript:;" class="close">关闭</a>
    </div>
</div>
<script>var online= new Array();</script>
<script src="http://webpresence.qq.com/getonline?Type=1&645481746:1712816412:645481746:"></script>
<script>
(function($){
    for (var i=0; i<online.length; i++) {
        if (online[i]) jQuery("#box-kefu .qq").eq(i).addClass("online");
    }
    var _open = $("#box-kefu").find(".kefu-open"),
        _close = $("#box-kefu").find(".kefu-close");
    _open.find("a").hover(function(){
        $(this).stop(true,true).animate({paddingLeft:20},200).find("i").stop(true,true).animate({left:75},200);
    },function(){
        $(this).stop(true,true).animate({paddingLeft:35},200).find("i").stop(true,true).animate({left:10},200);
    });
    

    _open.find(".close").click(function(){
        _open.animate({width:148},200,function(){
            _open.animate({width:0},200,function(){
                _close.animate({width:34},200);

            });
        });
    });
    _close.click(function(){
        _close.animate({width:44},200,function(){
            _close.animate({width:0},200,function(){
                _open.animate({width:138},200);
            });
        });
    });
})(jQuery)
</script>
</body>
</html>