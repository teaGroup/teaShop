<?php if (!defined('THINK_PATH')) exit();?><div class="topbar">
  <div class="topbar2">
    <div class="add_fav"> <a onclick="" href="###">浮生若茶--名牌正品茶叶、茶礼商城！</a> </div>
    <div class="login-info"> <font>欢迎光临！&nbsp;&nbsp;</font> </div>
    <div class="quick-menu">
      <ul>
        <li><a title="帮助中心" href="#">帮助中心</a> </li>
        <li><a href="__APP__/Reg/reg">[免费注册]</a></li>
      </ul>
    </div>
  </div>
</div>
 <div id="userlogin">
  <div id="topnav" class="topnav"><a href="login" class="signin"><span>登录</span></a> </div>
  <fieldset id="signin_menu">
    <form method="post" id="signin" action="__APP__/Public/doLogin">
      <p>
      <label for="username">用户名</label>
      <input id="username" name="username" value="" title="username" tabindex="4" type="text">
      </p>
      <p>
        <label for="password">密码</label>
        <input id="password" name="password" value="" title="password" tabindex="5" type="password">
      </p>
      <p>
        <label for="code">验证码</label>
        <input id="code" type="text" style="width:70px;" class="text-input" name="code" required="required">
      </p>
      <div style="margin-left:90px; margin-top:-36px; width:100px;">
        <p id="verify-code">
          <img height=29 width=65 src="__APP__/Public/code" onclick='this.src=this.src+"?"+Math.random()'/>
          <span id="log_code" class="code"></span>
        </p>
        <div class="clear"></div>
      </div>
          


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
<!--<script type="text/javascript">
$.get("/teaShop/index.php/Reg/checkEmail",{'email':emailstr},function(data,status){
  if(data=="no"){
    $("#reg_email").html("<span style='color:#C00;'>该邮箱已经注册</span>");
  }else{
    $(this).css("border-color", "");  //格式正确，删除输入框的红色，并删除提示
    $("#reg_email").html("");
  }
});
</script>-->