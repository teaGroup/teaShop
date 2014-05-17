<?php
	class RegAction extends Action{
		public function reg(){
			$this->display();
		}	
		//检查用户名是否注册过
		public function checkName(){
			$username=$_GET['username'];

			$user = M('User');
			$where['User_Name'] = $username;
			$count = $user->where($where)->Find();

			if($count){
				echo 'no';
			}else{
				echo 'yes';
			}
			//echo $username;
		}
		//检查邮箱是否注册过
		public function checkEmail(){
			$email=$_GET['email'];

			$user = M('User');
			$where['User_Email'] = $email;
			$count = $user->where($where)->Find();

			if($count){
				echo 'no';
			}else{
				echo 'yes';
			}
			//echo $username;
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
		//注册
		public function doReg(){
			$pwd =md5($_POST['User_Pwd']);
			$user = M('User');
			$user->create();

			$user->User_Pwd = $pwd;
			$user->User_JoinDate = date("Y-m-d H:i:s");
			$user->User_LastLogTime = date("Y-m-d H:i:s");
			//dump($user);
			//exit();
			$lastId = $user->add();

			if($lastId){
				$this->redirect('Index/index');
			}else{
				$this->error('用户注册失败');
			}


		}
	}
?>