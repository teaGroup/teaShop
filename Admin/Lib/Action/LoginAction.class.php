<?php
	class LoginAction extends Action{
		function login(){
			$this->display();
		}

		//检查验证码是否正确
		public function checkCode(){
			$code=$_GET['code'];
			if(md5($code)!=$_SESSION['verify']){
				echo 'no';
			}else{
				echo 'yes';
			}
		}

		function doLogin(){
			$adminname = $_POST['username'];
			$adminpwd = md5($_POST['pwd']);
			
			$admin = M('Admin');
			$where['Admin_Name'] = $adminname;
			$where['Admin_Pwd'] = $adminpwd;
			$arr = $admin->where($where)->Find();

			if($arr){
				$_SESSION['adminname'] = $adminname;
				$_SESSION['id'] = $arr['pk_Admin_Id'];
				$this->success('登录成功',U('Index/index'));
			}else{
				$this->error('用户名或密码错误');
			}
		}

		function logout(){
			if(!empty($_SESSION[adminname])){
				session('adminname',null);
				$_SESSION=array();
				session_destroy();
				$this->redirect('Login/login');
			}
		}
	}

?>