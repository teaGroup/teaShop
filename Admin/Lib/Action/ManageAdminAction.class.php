<?php
	class ManageAdminAction extends Action{
		public function index(){
			 $m=M("admin");
			 
		     import("ORG.Util.Page");//导入分页类
		     $count=$m->count();//获取数据库中存在的总数
		     $page=new Page($count,5);//实例化分页类 传入总记录数和每页显示的记录数
		     $show=$page->show();//分页显示输出
		     $arr=$m->query("select pk_Admin_Id,Admin_Pwd,Admin_Name,Authority_Name,Role_Name from t_admin,t_authority,t_role where fk_Autho_Admin_Id=pk_Authority_Id and fk_Role_Admin_Id=pk_Role_Id");			 
		     $this->assign("arr",$arr);
		     $this->assign("show",$show);
	         $this->display();
		}
		public function add(){
	         $m=M("admin");
		     $arr=$m->select();
		     $this->assign("list",$arr);
	         $this->display();
	    }
		public function insert(){
	       //获取表单传过来的值
		    $name=$_POST["admin_name"];
			$pwd=$_POST["admin_pwd"];
			$authority=$_POST["admin_authority"];
			$role=$_POST["admin_role"];

		  //创建一个表对象，将传来的数据插入到数据库中
		    $m=M("admin");
			//$m->Admin_Name=$name;
			//$m->Admin_Pwd=$pwd;
		   // $count=$m->add();
		    $count=$m->execute("insert into t_admin('Admin_Name','Admin_Pwd') values($name,$pwd)");
			$count=$m->execute("update t_authority,t_role set Authority_Name='$authority' and Role_Name='$role' where fk_Autho_Admin_Id=pk_Authority_Id and fk_Role_Admin_Id=pk_Role_Id");

		  //判断操作是否成功
		    if($count>0){
		         $this->success("数据添加成功！","index");
		    }else{
		         $this->error("数据添加失败！");
		    }
		}
	    public function del(){
	       //获取要删除的ID号
		   $id=$_GET["id"];
		   $m=M("admin");
		   $count=$m->where("pk_Admin_Id={$id}")->delete();
		   if($count>0){
		       $this->success("数据删除成功！");
		   }else{
		       $this->error("数据删除失败！");
		   }	   
		}	
		public function update(){
			$id=$_GET['id'];
		    $name=$_POST["admin_name"];
			$pwd=$_POST["admin_pwd"];
			$authority=$_POST["admin_authority"];
			$role=$_POST["admin_role"];
               $m=M("admin");
			   $m=M("authority");
			   $m=M("role");
			//$data['pk_News_Id']=$id;
			if(!empty($name)){
			     $data['Admin_Name']=$name;
			}
			if(!empty($pwd)){
			     $data['Admin_Pwd']=$pwd;
			}
			if(!empty($authority)){
			     $data['Admin_Authority']=$authority;
			}
			if(!empty($role)){
			     $data['Admin_Role']=$role;
			}
			$count=$m->where("pk_Admin_Id={$id}")->save($data);
			if($count>0){
			    $this->success("数据修改成功！","index");
			}else{
			    $this->error("数据修改失败！");
			}
	    }	
	}
?>