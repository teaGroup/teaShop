<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<title>修改订单</title>
<style>
a              { color: #57a000; text-decoration: none; }
a:hover     { color: #000; }
a:active     { color: #777; }
a:focus     { outline: 1px; }
table{
	text-align:left;
	font-size:14px;
	/*border:1px #DDDDDD solid;*/
}
table img{
	width:80px;
	height:80px;
}
</style>
<script>
$(function(){
	var state = '<?php echo ($orderstate); ?>';
	if(state=='未处理'){
		$("#zero").attr("checked",'true');
	}
	if(state=='正在处理'){
		$("#one").attr("checked",'true');
	}
	if(state=='已处理'){
		$("#two").attr("checked",'true');
	}	
	
	$("input[name=name]").bind("focusout",function(e){
	var username=$.trim($(this).val());
	if(username==""){
		$("#username").html("收货人不能为空");	
	}else{
		$("#username").html("");	
	}	
	
});
$("input[name=addr]").bind("focusout",function(e){
	var addr=$.trim($(this).val());
	if(addr==""){
		$("#addr").html("收货人地址不能为空");	
	}else{
		$("#addr").html("");	
	}	
});
$("input[name=tel]").bind("focusout",function(e){
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
$("input[name=postcode]").bind("focusout",function(e){
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
<form action="__URL__/update" method="post">
<table width="1000" align="center" border="1" bordercolor="#ddd">
  <tr bgcolor="#f3f3f3" height="45">
    <td colspan="8" style="text-align:center;">订单编号：<?php echo ($orderid); ?>　　　　<a href="__URL__/deleteO/id/<?php echo ($orderid); ?>">删除订单</a></td>
  </tr>
  <tr>
    <td width="120" style="text-align:right;">订单状态：</td>
    <td colspan="7">
    	<form action="__URL__/update" method="post">
    		<input type="radio" name="state" value="未处理" id="zero" />未处理　
        	<input type="radio" name="state" value="正在处理" id="one" />正在处理　
        	<input type="radio" name="state" value="已处理" id="two" />已处理
        	<input type="submit" name="states" value="修改订单状态" />
            <input type="hidden" name="orderid" value="<?php echo ($orderid); ?>" />
        </form>
    </td>
  </tr>
  <tr style="text-align:center; height:30px;">
    <td colspan="2">商品名称</td>
    <td width="80">单价</td>
    <td width="70">积分</td>
     <td width="100">商品数量</td>
    <td width="80">积分小计</td>
    <td width="100">小计</td>
    <td width="60">操作</td>
  </tr>
  <?php if(is_array($orderinfo)): $i = 0; $__LIST__ = $orderinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr style="text-align:center;">
    <td colspan="2" style="text-align:left;">
    	<img src="<?php echo ($vo["Goods_img"]); ?>" /><?php echo ($vo["Goods_Name"]); ?>
    </td>
    <td ><?php echo ($vo["Goods_Price"]); ?></td>
    <td><?php echo ($vo["Goods_RewardCred"]); ?></td>
    <td>
    	<form name="order[<?php echo ($vo["Goods_Id"]); ?>]" action="__URL__/update" method="post">
        	<input type=number name="num" min=1 max='<?php echo ($vo["Goods_Num"]); ?>' value="<?php echo ($vo["OrderIt_Num"]); ?>" style="width:40px;">
            <input type="hidden" name="goodsid" value="<?php echo ($vo["Goods_Id"]); ?>">
            <input type="hidden" name="orderid" value="<?php echo ($vo["Order_Id"]); ?>">
            <input type="submit" name="Mnum" value="修改" />
        </form>
    </td>
    <td><?php echo ($vo["SubCredit"]); ?></td>
    <td><?php echo ($vo["Order_SubSum"]); ?></td>
    <td><a href="__URL__/deleteG/goodsid/<?php echo ($vo["Goods_Id"]); ?>/orderid/<?php echo ($vo["Order_Id"]); ?>">删除</a></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  <tr bgcolor="#f3f3f3" height="30">
    <td colspan="8" style="text-align:left;">
    	金额总计：<span style="color:#900; font-family:Georgia,'Times New Roman'; font-size:26px;"><?php echo ($total); ?></span>&nbsp;元　　　　
        　获得积分：<?php echo ($totalc); ?></td>
  </tr>
  <?php if(is_array($consiinfo)): $i = 0; $__LIST__ = $consiinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?><tr height="35">
    	<td colspan="8"><b>收获地址详情：</b><?php echo ($vo2["Consi_Addr"]); ?>(<?php echo ($vo2["Consi_Name"]); ?>　收),<?php echo ($vo2["Consi_Tel"]); ?>,<?php echo ($vo2["Consi_PostCode"]); ?></td>
    </tr>
 <form action="__URL__/update" method="post">
    <tr>
    <td style="text-align:right;">下单用户：</td>
    <td colspan="7"><input type="text" name="owner" value="<?php echo ($vo2["Order_Owner"]); ?>" disabled="disabled" /> </td>
  </tr>
   </tr>
    <tr>
    <td style="text-align:right;">收货人：</td>
    <td colspan="7">
    	<input type="text" name="name" value="<?php echo ($vo2["Consi_Name"]); ?>" />
        <span style="color:#900;" id="username"></span>
    </td>
  </tr>
   </tr>
    <tr>
    <td style="text-align:right;">收获地址：</td>
    <td colspan="7">
    	<input type="text" name="addr" value="<?php echo ($vo2["Consi_Addr"]); ?>"  size="50"/>
        <span style="color:#900;" id="addr"></span>
    </td>
  </tr>
   </tr>
    <tr>
    <td style="text-align:right;">邮政编码：</td>
    <td colspan="7">
    	<input type="text" name="postcode" value="<?php echo ($vo2["Consi_PostCode"]); ?>" />
        <span style="color:#900;" id="postcode"></span>
    </td>
  </tr>
   </tr>
    <tr>
    <td style="text-align:right;">联系电话/手机：</td>
    <td colspan="7">
    	<input type="text" name="tel" value="<?php echo ($vo2["Consi_Tel"]); ?>" />
        <span style="color:#900;" id="tel"></span>
    </td>
  </tr>
   </tr>
    <tr>
    <td style="text-align:right;">下单日期：</td>
    <td colspan="7"><input type="text" max="date" value="<?php echo ($vo2["Order_Time"]); ?>" disabled="disabled" /></td>
  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
  <tr><td colspan="8" style="text-align:center;">
   <input type="hidden" name="consiid" value="<?php echo ($vo2["Consi_Id"]); ?>" />
   <input type="hidden" name="orderid" value="<?php echo ($orderid); ?>" />
  	<input type="submit" name="Mconsi" value="保存修改" />
  </td></tr>
</table>
</form>
</body>
</html>