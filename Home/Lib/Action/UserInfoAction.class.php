<?php
class UserInfoAction extends CommonAction {
    public function index(){

        $userid =  $_SESSION['id'];
        $m=M('user');
		$arr=$m->where("pk_User_Id='$userid'")->select();

		$this->assign('arr',$arr);
		$this->display();
   }
   public function update(){
	    $id=$_POST['user_id'];
	   	$user_name=$_POST['user_name'];
		$sex=$_POST['sex'];
		$email=$_POST['user_mail'];
		$m=M('user');
		if(!empty($user_name)){
				$data['User_Name']=$user_name;
			}
		if(!empty($sex)){
				$data['User_Sex']=$sex;
			}
		if(!empty($email)){
				$data['User_Email']=$email;
			}
		$count=$m->where("pk_User_Id={$id}")->save($data);
			if($count>0){
			    $this->success("数据修改成功！","index");
			}else{
			    $this->error("数据修改失败！");
			}
	   }
	public function pwd(){
		if(!$this->isPost()){
			halt('页面不存在');
		}
		$m=M('user');
		$where = array('pk_User_Id' => $_SESSION['id']);
		$userid = $_SESSION['id'];
		$old_password = $m->where($where)->getField('User_Pwd');
		
		if($this->_POST('old_password','md5')!= $old_password){
			$this->error('旧密码错误');	
		}
		if($this->_POST('new_password')!=$this->_POST('confirm')){
		
		    echo $_POST['confirm'];
			$this->error('两次密码不一致');
		}
		$newPwd = $this->_POST('new_password','md5');
		$data=array(
			'pk_User_Id' => $_SESSION['id'],
			'User_Pwd' => $newPwd
		);
		$count=$m->where("pk_User_Id='$userid'")->save($data);
		if($count>0){
			$this->success('修改成功',U('index'));
		}else{
			$this->error('修改失败,请重试...');
		}

	 }
}