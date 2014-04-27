// JavaScript Document
$(function(){
     //建立全局变量，确保点击提交时是经过验证的正确的数据
     var flag1=false,flag2=false,flag3=false,flag4=false,flag5=false;
	 
	function chkreg(){
			if(flag1==true && flag2==true && flag3==true && flag4==true && flag5==true){
				$('#reg').removeAttr("disabled");
			}else{
				$("#reg").attr('disabled',"true");
			}
	}

	
	$("#username").focus(function(e){ //获得焦点时，提示用户输入
	e.preventDefault();	
	$("#reg_username").html("请输入用户名");
	$("#reg_username").css("border-color", "");
	});
	
	$("#email").focus(function(e){
	e.preventDefault();	
	$("#reg_email").html("请输入常用邮箱");
	$("#reg_email").css("border-color", "");
	});
	
	$("#pwd").focus(function(e){ 
	e.preventDefault();	
	$("#reg_pwd").html("密码长度6-20位，字母区分大小写");
	$("#reg_email").css("border-color", "");
	});
	
	$("#yanz").focus(function(e){ 
	e.preventDefault();	
	$("#reg_yanz").html("请输入图片中的字符，不区分大小写");
	$("#reg_yanz").css("border-color", "");
	});
	
	
	//开始验证表单
	//失去焦点时，验证用户的输入
	
	//对用户名的验证
	$("#username").bind("focusout",function(e){
		var username=$.trim($("#username").val());
		if(username==""){    
			$(this).css("border-width","1px");
			var instr="<span style='color:#C00;'>请输入用户名</span>";
			$("#reg_username").html(instr);	
		}
		else{
    		$.get("/teaShop/index.php/Reg/checkName",{'username':username},function(data,status){
      			if(data=="no"){
      				$("#reg_username").html("<span style='color:#C00;'>该用户名已经注册</span>");
      			}else{
      				$(this).css("border-color", "");  //输入一直删除输入框的红色，并删除提示
					$("#reg_username").html("");
					flag1=true;	
      			}
      		});
			
		}
		chkreg();
	});
				
	//对邮箱地址的验证
	$("#email").bind("focusout",function(e){
		var emailstr=$.trim($(this).val());   //去除首尾空格
		if(emailstr=="")   //如果用户没有输入
		{
			$("#reg_email").html("<span style='color:#C00;'>请输入邮箱地址</span>");
			//$(this).css("border-width","1px");
			$(this).addClass("error");  //应用错误强调的显示css:error需要提前定义
		}
		else    //如果用户已经输入，则验证格式是否正确
		{
			var pattern=new RegExp(/^(\w)+(\.\w+)*@(\w)+((\.\w{2,3}){1,3})$/);    //email地址的正则表达式
			flag = pattern.test(emailstr);
			if(flag){
				$.get("/teaShop/index.php/Reg/checkEmail",{'email':emailstr},function(data,status){
      				if(data=="no"){
      					$("#reg_email").html("<span style='color:#C00;'>该邮箱已经注册</span>");
      				}else{
      					$(this).css("border-color", "");  //格式正确，删除输入框的红色，并删除提示
						$("#reg_email").html("");
						flag2=true;
      				}
   				 });	
			}
			else{
				$(this).css("border-width","1px");
				var instr="<span style='color:#C00;'>邮箱格式不正确！</span>";
				$("#reg_email").html(instr);	
			}
		}
		chkreg();
		});
		
		//对密码的验证
		$("#pwd").bind("focusout",function(e){
			var pwdstr=$.trim($(this).val());   //去除首尾空格
			if(pwdstr=="")   //如果用户没有输入
		{
			$("#reg_pwd").html("<span style='color:#C00;'>请填写密码</span>");
			$(this).css("border-width","1px");
		}
		else    //如果用户已经输入，则验证格式是否正确
		{
			//首先判断密码长度
			var length=pwdstr.length;
			if(length<6){   
				$(this).css("border-width","1px");
				var instr="<span style='color:#C00;'>密码长度过短</span>";
				$("#reg_pwd").html(instr);		
			}
			else if(length>20) {
				$(this).css("border-width","1px");
				var instr="<span style='color:#C00;'>密码长度不能超过20个字符</span>";
				$("#reg_pwd").html(instr);	
			}
			else{  //长度在6-14之间
			var pattern=new RegExp(/(?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{2,})$/);    //6-14位字母和数字组合的正则表达式
			flag = pattern.test(pwdstr);
			if(flag){
				$(this).css("border-color", "");  //格式正确，删除输入框的红色，并删除提示
				$("#reg_pwd").html("");
				
				flag3=true;
			}
			else{
				$(this).css("border-width","1px");
				var instr="<span style='color:#C00;'>您的密码太过简单，请使用字母和数字的组合，否则无法注册</span>";
				$("#reg_pwd").html(instr);	
				}
				}
			}
			chkreg();
			});
			
			//对重复密码的验证
			$("#pwd2").bind("focusout",function(e){
				var pwd=$.trim($("#pwd").val());
				var pwd2=$.trim($("#pwd2").val());
				if(pwd==pwd2){    //判断两个字符串是否相等
					$(this).css("border-color", "");  //输入一直删除输入框的红色，并删除提示
					$("#reg_pwd2").html("");
					flag4=true;
				}
				else{
					$(this).css("border-width","1px");
					var instr="<span style='color:#C00;'>两次输入的密码不一致</span>";
					$("#reg_pwd2").html(instr);	
					flag4=false;	
				}
				chkreg();
				});	
			
			//对验证码的判断	
			$("#code").bind("focusout",function(e){
				var code=$.trim($("#code").val());
				if(code==""){  
					$(this).css("border-width","1px");
					var instr="<span style='color:#C00;'>请输入验证码</span>";
					$("#reg_code").html(instr);	
				}else{
					$.get("/teaShop/index.php/Reg/checkCode",{'code':code},function(data){
      					if(data=="no"){
      						$("#reg_code").html("<span style='color:#C00;'>验证码错误</span>");
      					}else{
      					$(this).css("border-color", "");  //输入一直删除输入框的红色，并删除提示
						$("#reg_code").html("");
						flag5=true;	
						}
      				});
					
				}
				chkreg();
				});		
				
				
			
		
});							