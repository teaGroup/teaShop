//分别验证各个输入框
   //在页面加载时就加载验证代码
$(function(){
     //建立全局变量，确保点击提交时是经过验证的正确的数据
     var flag1=false,flag2=false,flag3=false,flag4=false,flag5=false;
	//开始验证表单
	//失去焦点时，验证用户的输入
	//对邮箱地址的验证
	$("#username").bind("focusout",function(e){
		var userNstr=$.trim($(this).val());   //去除首尾空格
		if(userNstr=="")   //如果用户没有输入
		{
			$("#log_username").html("<span style='color:#C00;'>请输入用户名</span>");
			$(this).css("border-color", "#C00");
			$(this).css("border-width","1px");
			$(this).addClass("error");  //应用错误强调的显示css:error需要提前定义
		}else{
			$(this).css("border-color","");
			$("#log_username").html("");
		}
		});

	$("#pwd").bind("focusout",function(e){
		var pwdstr=$.trim($(this).val());   //去除首尾空格
		if(pwdstr=="")   //如果用户没有输入
		{
			$("#log_pwd").html("<span style='color:#C00;'>请输入密码</span>");
			$(this).css("border-color", "#C00");
			$(this).css("border-width","1px");
			$(this).addClass("error");  //应用错误强调的显示css:error需要提前定义
		}else{
			$(this).css("border-color","");
			$("#log_pwd").html("");
		}
		});

	$("#code").bind("focusout",function(e){
		var codestr=$.trim($(this).val());   //去除首尾空格
		if(codestr=="")   //如果用户没有输入
		{
			$("#log_code").html("<span style='color:#C00;'>请输入验证码</span>");
			$(this).css("border-color", "#C00");
			$(this).css("border-width","1px");
			$(this).addClass("error");  //应用错误强调的显示css:error需要提前定义
		}else{
			$(this).css("border-color","");
			$("#log_code").html("");
		}
		});
	
});							