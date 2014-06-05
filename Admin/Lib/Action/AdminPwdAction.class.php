<?php
	class AdminPwdAction extends CommonAction{
		public function index(){		
		    $this->display();
		}
		public function pwd(){
				if(!$this->isPost()){
					halt('页面不存在');
				}
		$m=M('admin');
		$where = array('pk_Admin_Id' => $_SESSION['id']);
		$adminid = $_SESSION['id'];
		$old_password = $m->where($where)->getField('Admin_Pwd');
		
		if($this->_POST('old_password','md5')!= $old_password){
			$this->error('旧密码错误');	
		}
		if($this->_POST('new_password')!=$this->_POST('confirm')){
		
		    echo $_POST['confirm'];
			$this->error('两次密码不一致');
		}
		$newPwd = $this->_POST('new_password','md5');
		$data=array(
			'pk_Admin_Id' => $_SESSION['id'],
			'Admin_Pwd' => $newPwd
		);
		$count=$m->where("pk_Admin_Id='$adminid'")->save($data);
		if($count>0){
			$this->success('修改成功',U('index'));
		}else{
			$this->error('修改失败,请重试...');
		}

	 }
	}
?>