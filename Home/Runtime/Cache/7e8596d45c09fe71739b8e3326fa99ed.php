<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link href="__PUBLIC__/css/userinfo.css" rel="stylesheet" media="screen" type="text/css"/>
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/Tab.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/userinfo.js"></script>

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
<div id="container">
  <div class="block box">
    <div id="ur_here">
      当前位置: <a href="__ROOT__">首页</a> <code>&gt;</code> 会员个人信息 </div>
  </div>
  <div class="userCenterBox" style="_height:5%;">
         
                  <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><form name="formEdit" action="__URL__/update" method="post" onsubmit="return userEdit()">
     
      <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
                
                <tbody>
                
                <script type="text/javascript">
					window.onload=function(){
						if(<?php echo ($vo["User_Sex"]); ?>==0){
							document.getElementsByName('sex')[1].checked='checked';
						}else{
							document.getElementsByName('sex')[0].checked='checked';
							}
					}
				</script>
                <input type="hidden" name="user_id" value="<?php echo ($vo["pk_User_Id"]); ?>"/>
                <tr>
                  <td width="28%" height="40" align="right" bgcolor="#FFFFFF">
                  	<label for="user_name">会员名称：</label>
                  </td>
                  <td width="72%" height="40" align="left" bgcolor="#FFFFFF">
                 	<input type="text" name="user_name" id="user_name" value="<?php echo ($vo["User_Name"]); ?>">
                  </td>
                </tr>
                <tr>
                  <td width="28%" height="40" align="right" bgcolor="#FFFFFF">性　别： </td>
                  <td width="72%" height="40" align="left" bgcolor="#FFFFFF">
                      <input  id="sex" type="radio" name="sex" value="1">
                    男
                  	<input  id="sex" type="radio" name="sex" value="0">
                    女</td>
                </tr>
                <tr>
                  <td width="28%" height="40" align="right" bgcolor="#FFFFFF">邮　　箱：</td>
                  <td width="72%" height="40" align="left" bgcolor="#FFFFFF">
                  	<input type="text" name="user_mail" id="user_mail" value="<?php echo ($vo["User_Email"]); ?>"><span style="color:#FF0000"> *</span><span id="email"></span>
                  </td>
                </tr>
                <tr>
                  <td width="28%" height="40" align="right" bgcolor="#FFFFFF">
                  	<label for="user_credit">积　　分：</label>
                  </td>
                  <td width="72%" height="40" align="left" bgcolor="#FFFFFF">
                 <?php echo ($vo["User_Credit"]); ?>分
                  </td>
                </tr>
                <tr>
                  <td width="28%" height="40" align="right" bgcolor="#FFFFFF">
                  	<label for="user_level">会员等级：</label>
                  </td>
                  <td width="72%" height="40" align="left" bgcolor="#FFFFFF"><?php echo ($vo["fk_UserL_User_Id"]); ?>级</td>
                </tr>
		        <tr>
                  <td colspan="2" height="40"  bgcolor="#FFFFFF"><input name="act" type="hidden" value="act_edit_profile">
                    <input name="submit" type="submit" value="确认修改" class="bnt_blue_1" style="border:none;">
                  </td>
                </tr>
                
       </tbody></table>
    </form>
     <form name="formPassword" action="__URL__/pwd" method="post" onsubmit="return editPassword()">
     <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
        <tbody><tr>
          <td width="28%" height="40" align="right" bgcolor="#FFFFFF">原密码：</td>
          <td width="76%" height="40" align="left" bgcolor="#FFFFFF"><input name="old_password" type="password" size="25" class="inputBg" ></td>
        </tr>
        <tr>
          <td width="28%" height="40"align="right" bgcolor="#FFFFFF">新密码：</td>
          <td align="left" height="40" bgcolor="#FFFFFF"><input name="new_password" type="password" size="25" class="inputBg" id ="pwd">　<span id="reg_pwd" ></span></td>
        </tr>
        <tr>
          <td width="28%"height="40"  align="right" bgcolor="#FFFFFF">确认密码：</td>
          <td align="left" height="40" bgcolor="#FFFFFF"><input name="confirm" type="password" size="25" class="inputBg" id="pwd2">　<span id="reg_pwd2" ></span></td>
        </tr>
        <tr>
          <td colspan="2" height="40" bgcolor="#FFFFFF"><input name="act" type="hidden" value="act_edit_password">
            <input name="submit" type="submit" class="bnt_blue_1" style="border:none;" value="确认修改" id="xiugaipwd">
          </td>
        </tr>
      </tbody></table>
    </form><?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
</div>
<div class="clear"></div>
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