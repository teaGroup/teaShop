<?php
	class AdminPwdAction extends Action{
		public function index(){		
		    $this->display();
		}
		public function pwd(){
		$old_password=$_POST['old_password'];
		$new_password=$_POST['new_password'];
		$confirm_password=$_POST['confirm_password'];
		$m=M('admin');
		if($old_password=$data['Admin_Pwd']&&!empty($old_password)){
			if(!empty($new_password)&&$new_password==$confirm_password){
				$data['Admin_Pwd']=$new_password;
				}
			}
	   	$count=$m->save($data);
		if($count>0){
			   $this->success("密码修改成功！","index");
		}else{
			   $this->error("密码修改失败！");
		   }
		}
	}
?>