<?php
	class PUblicAction extends Action{
		function code(){
			import('ORG.Util.Image');
			Image::buildImageVerify();
		}
		//头部
		public function top1(){
			$this->display();
		}
		public function top2(){
			$this->display();
		}
		public function header(){
			$this->display();
		}
		//尾部
		public function footer(){
			$this->display();
		}
		public function footer2(){
			$this->display();
		}



		//登录
		public function doLogin(){
			$username = $_POST['username'];
			$pwd = md5($_POST['password']);
			$code = md5($_POST['code']);
			
			$user = M('User');
			$where['User_Name'] = $username;
			$where['User_Pwd'] = $pwd;
			$arr = $user->where($where)->Find();

			if($code == $_SESSION['verify']){
				if($arr){
					$_SESSION['username'] = $username;
					$_SESSION['id'] = $arr['pk_User_Id'];
				
					$this->success('登录成功',U('Index/index'));
				}else{
					$this->error('用户名或密码错误');
				}
			}else{
				$this->error('验证码错误');
			}
		}
		//退出
		function logout(){
			if(!empty($_SESSION[username])){
				session('username',null);
				$_SESSION=array();
				session_destroy();
				$this->redirect('Index/index');
			}
		}

	}
?>