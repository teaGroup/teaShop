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
	    $id=$_POST['user_id'];
		$old_password=$_POST['old_password'];
		$new_password=$_POST['new_password'];
		echo $new_password;
		$confirm_password=$_POST['confirm_password'];
		$m=M('user');
		if($old_password=$data['User_Pwd']&&!empty($old_password)){
			if(!empty($new_password)&&$new_password==$confirm_password){
				$data['User_Pwd']=$new_password;
				}
			}
	   	$count=$m->where("pk_User_Id={$id}")->save($data);
		if($count>0){
			   $this->success("密码修改成功！","index");
		}else{
			   $this->error("密码修改失败！");
		   }
	   }
}