<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>浮生若茶</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/homepublic.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/order.css" />
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script>
$(function(){

		$.get("__URL__/check",function(data){
			if(data.status==1){
				//alert(1);	
				$("#oldaddr").attr("checked",'true');
				$("input[name='addr[]']").eq(0).attr("checked",'true');
				$("div#old").show();
			}else{
				$("#newaddr").attr("checked",'true');
			}	
		});	

$("input[name=Consi_Name]").bind("focusout",function(e){
	var username=$.trim($(this).val());
	if(username==""){
		$("#username").html("收货人不能为空");	
	}else{
		$("#username").html("");	
	}	
	
});
$("input[name=Consi_Addr]").bind("focusout",function(e){
	var addr=$.trim($(this).val());
	if(addr==""){
		$("#addr").html("收货人地址不能为空");	
	}else{
		$("#addr").html("");	
	}	
});
$("input[name=Consi_Tel]").bind("focusout",function(e){
		var tel=$.trim($(this).val());
		if(tel==""){
			$("#tel").html("手机/电话不能为空");	
		}else{
			reg=/^(\d{3,4}\-)?[1-9]\d{6,7}$/;
			reg2=/^(\+\d{2,3}\-)?\d{11}$/;
			if(!reg.test(tel)){
				if(!reg2.test(tel)){
					$("#tel").html("请输入正确的电话号码");		
				}	
			}else{
				$("#tel").html("");		
			}	
		}
	});
$("input[name=Consi_PostCode]").bind("focusout",function(e){
		var postcode=$.trim($(this).val());
		if(postcode==""){
			$("#postcode").html("");	
		}else{
			reg=/^[1-9]\d{5}$/;	
			if(!reg.test(postcode)){
				$("#postcode").html("请输入正确的邮政编码");
			}else{
				$("#postcode").html("");	
			}
		}
	});

});

</script>
</head>

<body>
<!----------------头部-------------------------------->
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
        <li><a title="帮助中心" href="#">帮助中心</a> </li>
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
            <div class="cate-tag"> <strong><a href="__APP__/Search/sortgoods/name/">乌龙茶</a></strong>
              <div class="listModel">
                <p> <a href="__APP__/Search/sortgoods/name/">安溪铁观音</a> <a href="__APP__/Search/sortgoods/name/">武夷大红袍</a></p>
                <p>  <a href="__APP__/Search/sortgoods/name/">台湾乌龙茶</a> <a href="__APP__/Search/sortgoods/name/">凤凰单纵</a> </p>
              </div>
            </div>
            <div class="list-item hide">
              <ul class="itemleft">
                <dl>
                  <dt>乌龙茶</dt>
                  <dd> <a href="__APP__/Search/sortgoods/name/">安溪铁观音</a> <a href="__APP__/Search/sortgoods/name/">武夷大红袍</a> <a href="__APP__/Search/sortgoods/name/">台湾乌龙茶</a> <a href="__APP__/Search/sortgoods/name/">凤凰单纵</a></dd>
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
            <div class="cate-tag"> <strong><a href="__APP__/Search/sortgoods/name/">红茶</a></strong>
              <div class="listModel">
                <p> <a href="__APP__/Search/sortgoods/name/">正山小种</a> <a href="__APP__/Search/sortgoods/name/">祁门红茶</a></p>
                <p>  <a href="__APP__/Search/sortgoods/name/">云南滇红</a> <a href="__APP__/Search/sortgoods/name/">金骏眉</a> </p>
              </div>
            </div>
            <div class="list-item hide">
              <ul class="itemleft">
                <dl>
                  <dt>红茶</dt>
                  <dd> <a href="__APP__/Search/sortgoods/name/">正山小种</a> <a href="__APP__/Search/sortgoods/name/">祁门红茶</a> <a href="__APP__/Search/sortgoods/name/">云南滇红</a> <a href="__APP__/Search/sortgoods/name/">金骏眉</a><a href="__APP__/Search/sortgoods/name/">坦洋工夫</a><a href="__APP__/Search/sortgoods/name/">白琳工夫</a><a href="__APP__/Search/sortgoods/name/">四川红茶</a><a href="__APP__/Search/sortgoods/name/">锡兰红茶</a><a href="__APP__/Search/sortgoods/name/">其他红茶</a></dd>
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
            <div class="cate-tag"> <strong><a href="__APP__/Search/sortgoods/name/">黑茶</a></strong>
              <div class="listModel">
                <p> <a href="__APP__/Search/sortgoods/name/">普洱茶</a> <a href="__APP__/Search/sortgoods/name/">安化黑茶</a></p>
                <p>  <a href="__APP__/Search/sortgoods/name/">泾渭茯茶</a> </p>
              </div>
            </div>
            <div class="list-item hide">
              <ul class="itemleft">
                <dl>
                  <dt>黑茶</dt>
                  <dd> <a href="__APP__/Search/sortgoods/name/">普洱茶</a> <a href="__APP__/Search/sortgoods/name/">安化黑茶</a> <a href="__APP__/Search/sortgoods/name/">泾渭茯茶</a></dd>
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
            <div class="cate-tag"> <strong><a href="__APP__/Search/sortgoods/name/">白茶</a></strong>
              <div class="listModel">
                <p> <a href="__APP__/Search/sortgoods/name/">白毫银针</a> <a href="__APP__/Search/sortgoods/name/">白牡丹</a></p>
              </div>
            </div>
            <div class="list-item hide">
              <ul class="itemleft">
                <dl>
                  <dt>白茶</dt>
                  <dd> <a href="__APP__/Search/sortgoods/name/">白毫银针</a> <a href="__APP__/Search/sortgoods/name/">白牡丹</a></dd>
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
            <div class="cate-tag"> <strong><a href="__APP__/Search/sortgoods/name/">花草茶</a></strong>
              <div class="listModel">
                <p> <a href="__APP__/Search/sortgoods/name/">苦荞茶</a> <a href="__APP__/Search/sortgoods/name/">茉莉花茶</a></p>
                <p>  <a href="__APP__/Search/sortgoods/name/">水果茶</a> <a href="__APP__/Search/sortgoods/name/">苦丁茶</a> </p>
              </div>
            </div>
            <div class="list-item hide">
              <ul class="itemleft">
                <dl>
                  <dt>花草茶</dt>
                  <dd> <a href="__APP__/Search/sortgoods/name/">苦荞茶</a> <a href="__APP__/Search/sortgoods/name/">茉莉花茶</a> <a href="__APP__/Search/sortgoods/name/">水果茶</a> <a href="__APP__/Search/sortgoods/name/">苦丁茶</a><a href="__APP__/Search/sortgoods/name/">菊花</a><a href="__APP__/Search/sortgoods/name/">昆仑血菊</a><a href="__APP__/Search/sortgoods/name/">玫瑰花</a><a href="__APP__/Search/sortgoods/name/">养生茶</a></dd>
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
            <div class="cate-tag"> <strong><a href="__APP__/Search/sortgoods/name/">茶具</a></strong>
              <div class="listModel">
                <p> <a href="__APP__/Search/sortgoods/name/">玻璃茶具</a> <a href="__APP__/Search/sortgoods/name/">陶瓷茶具</a></p>
                <p>  <a href="__APP__/Search/sortgoods/name/">紫砂茶具</a> <a href="__APP__/Search/sortgoods/name/">电茶壶</a> </p>
              </div>
            </div>
            <div class="list-item hide">
              <ul class="itemleft">
                <dl>
                  <dt>茶具</dt>
                  <dd> <a href="__APP__/Search/sortgoods/name/">玻璃茶具</a> <a href="__APP__/Search/sortgoods/name/">陶瓷茶具</a> <a href="__APP__/Search/sortgoods/name/">紫砂茶具</a> <a href="__APP__/Search/sortgoods/name/">电茶壶</a><a href="__APP__/Search/sortgoods/name/">茶盘</a><a href="__APP__/Search/sortgoods/name/">茶宠</a><a href="__APP__/Search/sortgoods/name/">其他茶具</a></dd>
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
<!------------------主体--------------------->
<div id="container">
	<div id="main-content">
    	<div class="content-box">
    		<div class="content-box-header">
        		<h3>收获人地址</h3>
	        	<div class="clear"></div>
            </div>
            
            <div class="content-box-content">
        		<div class="tab-content default-tab" id="tab1"> 
          			<div class="notification attention png_bg"></div>
                    <div id="address">
                    <form action="__URL__/index/add" method="post">
                    <div id="old" style="display:none;">
                    	<p><input type="radio" name="method[]" value="old" id="oldaddr"/>选择收获地址
                    	<ul>
                        	<?php if(is_array($oldaddr)): $i = 0; $__LIST__ = $oldaddr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                	<input type="radio" name="addr[]" value="<?php echo ($vo["pk_ConsiInfo_Id"]); ?>" />
                                	<?php echo ($vo["Consi_Addr"]); ?>(<?php echo ($vo["Consi_Name"]); ?> 收),<?php echo ($vo["Consi_Tel"]); ?>,<?php echo ($vo["Consi_PostCode"]); ?>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    	</ul></p><br />
                    </div>
                    <p><input type="radio" name="method[]" value="new" id="newaddr" />使用新地址</p>
                    <table width="930" border="1" cellpadding="0">
					    <tr>
						    <td width="90">收货人姓名：</td>
						    <td>
                            	<input type="text" name="Consi_Name" size="20" />&nbsp;&nbsp;&nbsp;
                            	<span style="color:#900;" id="username">(必填)</span>
                            </td>
						    <td width="90">详细地址：</td>
						    <td>
                            	<input type="text" name="Consi_Addr" size="20" />&nbsp;&nbsp;&nbsp;
                                <span style="color:#900;" id="addr">(必填)</span>
                            </td>
					    </tr>
                        <tr>
						    <td>手机/电话：</td>
						    <td>
                            	<input type="tel" name="Consi_Tel" />&nbsp;&nbsp;&nbsp;
                                <span style="color:#900;" id="tel">(必填)</span>
                            </td>
						    <td>邮政编码：</td>
						    <td>
                            	<input type="text" name="Consi_PostCode"  size="20" onblur="isPostcode(this.value)" />&nbsp;&nbsp;&nbsp;
                                <span style="color:#900;" id="postcode"></span>
                            </td>
					    </tr>
					</table>
					</div>
                </div>
            </div>
            <div class="content-box-header">
        		<h3>确认订单信息</h3>
	        	<div class="clear"></div>
            </div>
            <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1"> 
          
          <div class="notification attention png_bg"></div>
          <table>
            <thead>
              <tr>
                <th width="500">商品名称</th>
                <th width="95">单价</th>
                <th width="110">数量</th>
                <th width="95">小计</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <td colspan="3" style="text-align:right; font-size:14px;">
                        <span id="total-pallets" style="color:#900; font-family:Georgia,'Times New Roman'; font-size:30px;" id="selectnum"><?php echo ($goodsnum); ?></span>
                        <strong>&nbsp;&nbsp;件商品&nbsp;&nbsp;&nbsp;&nbsp;</strong>    
                        <strong>合计：</strong>
                        <span style="font-size:20px; color:#999;">￥</span>
                        <span id="product-total" style="color:#900; font-family:Georgia,'Times New Roman'; font-size:30px;"><?php echo ($total); ?></span>
                        <strong>元</strong>      
                 </td>
                 <td>
                 	<input type="hidden" name="sum" value="<?php echo ($total); ?>" />
                    <input type="hidden" name="userid" value="<?php echo ($userid); ?>" />
                    <input type="image" src="__PUBLIC__/images/tjdd.jpg" onClick="this.form.action='__URL__/add'"/>
                 </td>
               </tr>
            </tfoot>
             </form>
            <tbody>
              <?php if(is_array($cartlist)): $i = 0; $__LIST__ = $cartlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                <td font_color="black" style="text-align:left;">
                    <img class="goodsimg" src="<?php echo ($vo["Goods_img"]); ?>" />
                    <?php echo ($vo["Goods_Name"]); ?>
                </td>
                <td font_color="black"><span><?php echo ($vo["Goods_Price"]); ?></span>元</td>
                <td font_color="black"><?php echo ($vo["Num"]); ?></td>
                <td font_color="black"><?php echo ($vo["Sum"]); ?></span>元</td>
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
          </table>
        </div>
        <!-- End #tab1 --> 
        
      </div>
        </div>
      </div>
    </div>
</div>
<!------------------------尾部-------------------------->
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