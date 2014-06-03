/* $Id : user.js 4865 2007-01-31 14:04:10Z paulgao $ */

$(function(){
	$("#user_mail").focus(function(e){ //获得焦点时，提示用户输入
	e.preventDefault();	
	$("#email").html("请输入常用邮箱");
	$("#email").css("border-color", "");
	});
	//对邮箱地址的验证
	$("#user_mail").bind("focusout",function(e){
		var emailstr=$.trim($(this).val());   //去除首尾空格
		if(emailstr=="")   //如果用户没有输入
		{
			$("#email").html("<span style='color:#C00;'>请输入邮箱地址</span>");
			$(this).css("border-color", "#C00");
			//$(this).css("border-width","1px");
			$(this).addClass("error");  //应用错误强调的显示css:error需要提前定义
		}
		else    //如果用户已经输入，则验证格式是否正确
		{
			var pattern=new RegExp(/^(\w)+(\.\w+)*@(\w)+((\.\w{2,3}){1,3})$/);    //email地址的正则表达式
			flag = pattern.test(emailstr);
			if(flag){
				$(this).css("border-color", "");  //格式正确，删除输入框的红色，并删除提示
				$("#email").html("");
				flag1=true;
			}
			else{
				$(this).css("border-color", "#C00");
				$(this).css("border-width","1px");
				var instr="<span style='color:#C00;'>邮箱格式不正确！</span>";
				$("#email").html(instr);	
			}
		}
		});
		
	$("#pwd").focus(function(e){ 
	e.preventDefault();	
	$("#reg_pwd").html("密码长度6-14位，字母区分大小写");
	$("#reg_pwd").css("border-color", "");
	});
	//对密码的验证
		$("#pwd").bind("focusout",function(e){
			var pwdstr=$.trim($(this).val());   //去除首尾空格
			if(pwdstr=="")   //如果用户没有输入
		{
			$("#reg_pwd").html("<span style='color:#C00;'>请填写密码</span>");
			$(this).css("border-color", "#C00");
			$(this).css("border-width","1px");
		}
		else    //如果用户已经输入，则验证格式是否正确
		{
			//首先判断密码长度
			var length=pwdstr.length;
			if(length<6){   
				$(this).css("border-color", "#C00");
				$(this).css("border-width","1px");
				var instr="<span style='color:#C00;'>密码长度过短</span>";
				$("#reg_pwd").html(instr);		
			}
			else if(length>14) {
				$(this).css("border-color", "#C00");
				$(this).css("border-width","1px");
				var instr="<span style='color:#C00;'>密码长度不能超过14个字符</span>";
				$("#reg_pwd").html(instr);	
			}
			else{  //长度在6-14之间
			var pattern=new RegExp(/(?!^[0-9]*$)(?!^[a-zA-Z]*$)^([a-zA-Z0-9]{2,})$/);    //6-14位字母和数字组合的正则表达式
			flag = pattern.test(pwdstr);
			if(flag){
				$(this).css("border-color", "");  //格式正确，删除输入框的红色，并删除提示
				$("#reg_pwd").html("");
				
				flag2=true;
			}
			else{
				$(this).css("border-color", "#C00");
				$(this).css("border-width","1px");
				var instr="<span style='color:#C00;'>您的密码太过简单，请使用字母和数字的组合</span>";
				$("#reg_pwd").html(instr);	
				}
				}
			}
			});
			//对重复密码的验证
			$("#pwd2").bind("focusout",function(e){
				var pwd=$.trim($("#pwd").val());
				var pwd2=$.trim($("#pwd2").val());
				if(pwd==pwd2){    //判断两个字符串是否相等
					$(this).css("border-color", "");  //输入一直删除输入框的红色，并删除提示
					$("#reg_pwd").html("");
					flag3=true;
				}
				else{
					$(this).css("border-color", "#C00");
					$(this).css("border-width","1px");
					var instr="<span style='color:#C00;'>两次输入的密码不一致</span>";
					$("#reg_pwd2").html(instr);	
					flag3=false;	
				}
				});
});
/* *
 * 修改会员信息
 */
function userEdit()
{
  var frm = document.forms['formEdit'];
  var email = frm.elements['email'].value;
  var msg = '';
  var reg = null;
  var passwd_answer = frm.elements['passwd_answer'] ? Utils.trim(frm.elements['passwd_answer'].value) : '';
  var sel_question =  frm.elements['sel_question'] ? Utils.trim(frm.elements['sel_question'].value) : '';

  if (email.length == 0)
  {
    msg += email_empty + '\n';
  }
  else
  {
    if ( ! (Utils.isEmail(email)))
    {
      msg += email_error + '\n';
    }
  }

  if (passwd_answer.length > 0 && sel_question == 0 || document.getElementById('passwd_quesetion') && passwd_answer.length == 0)
  {
    msg += no_select_question + '\n';
  }

  for (i = 7; i < frm.elements.length - 2; i++)	// 从第七项开始循环检查是否为必填项
  {
	needinput = document.getElementById(frm.elements[i].name + 'i') ? document.getElementById(frm.elements[i].name + 'i') : '';

	if (needinput != '' && frm.elements[i].value.length == 0)
	{
	  msg += '- ' + needinput.innerHTML + msg_blank + '\n';
	}
  }

  if (msg.length > 0)
  {
    alert(msg);
    return false;
  }
  else
  {
    return true;
  }
}

/* 会员修改密码 */
function editPassword()
{
  var frm              = document.forms['formPassword'];
  var old_password     = frm.elements['old_password'].value;
  var new_password     = frm.elements['new_password'].value;
  var confirm_password = frm.elements['comfirm_password'].value;

  var msg = '';
  var reg = null;

  if (old_password.length == 0)
  {
    msg += old_password_empty + '\n';
  }

  if (new_password.length == 0)
  {
    msg += new_password_empty + '\n';
  }

  if (confirm_password.length == 0)
  {
    msg += confirm_password_empty + '\n';
  }

  if (new_password.length > 0 && confirm_password.length > 0)
  {
    if (new_password != confirm_password)
    {
      msg += both_password_error + '\n';
    }
  }

  if (msg.length > 0)
  {
    alert(msg);
    return false;
  }
  else
  {
    return true;
  }
}


/* *
 * 会员找回密码时，对输入作处理
 */
function submitPwdInfo()
{
  var frm = document.forms['getPassword'];
  var user_name = frm.elements['user_name'].value;
  var email     = frm.elements['email'].value;

  var errorMsg = '';
  if (user_name.length == 0)
  {
    errorMsg += user_name_empty + '\n';
  }

  if (email.length == 0)
  {
    errorMsg += email_address_empty + '\n';
  }
  else
  {
    if ( ! (Utils.isEmail(email)))
    {
      errorMsg += email_address_error + '\n';
    }
  }

  if (errorMsg.length > 0)
  {
    alert(errorMsg);
    return false;
  }

  return true;
}

/* *
 * 会员找回密码时，对输入作处理
 */
function submitPwd()
{
  var frm = document.forms['getPassword2'];
  var password = frm.elements['new_password'].value;
  var confirm_password = frm.elements['confirm_password'].value;

  var errorMsg = '';
  if (password.length == 0)
  {
    errorMsg += new_password_empty + '\n';
  }

  if (confirm_password.length == 0)
  {
    errorMsg += confirm_password_empty + '\n';
  }

  if (confirm_password != password)
  {
    errorMsg += both_password_error + '\n';
  }

  if (errorMsg.length > 0)
  {
    alert(errorMsg);
    return false;
  }
  else
  {
    return true;
  }
}

function close_login()
{//关闭弹窗时，调用的函数
	var mengban=document.getElementById("mengban");
	mengban.className=" ";
	document.getElementById("login_module").style.display = "none";
}