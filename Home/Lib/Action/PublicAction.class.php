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
			/*$classifi = M('classifi');
			$clist = $classifi->where("fk_Classifi_ParentId is null")->select();
			$clist2 = $classifi->Where("fk_Classifi_ParentId is not null")->select();
			$this->assign('clist',$clist);
			$this->assign('clist2',$clist2);*/
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
					$data['User_LastLogTime'] = date("Y-m-d H:i:s");
					$data['User_LoginNum'] = $arr['User_LoginNum']+1;
					$user->where($where)->save($data);
					$this->success('登录成功');
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
				//$_SESSION=array();
				session_destroy();
				$this->redirect('Index/index');
			}
		}

	}
?>