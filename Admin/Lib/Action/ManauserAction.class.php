<?php
    class ManauserAction extends Action{
           //浏览会员信息
		 public function index(){
		      $m=M("User");
			 import("ORG.Util.Page");//导入分页类
		      $count=$m->count();//获取数据库中存在的总数
		      $page=new Page($count,5);//实例化分页类 传入总记录数和每页显示的记录数
		      $show=$page->show();//分页显示输出
			 $user=$m->query("select pk_User_Id,User_Name,User_Email,User_Pwd,User_Sex,User_JoinDate,User_LastLogTime,User_Credit,User_LoginNum,UserL_level from t_user,t_userlevel where t_user.fk_UserL_User_Id=t_userlevel.pk_UserL_Id limit ".$page->firstRow.",".$page->listRows);
			 $this->assign("user",$user);
			 $this->assign("show",$show);
			 $this->display();
		 }
		 //删除会员
		 public function del(){
		     $id=$_GET['id'];
			$m=M("User");
			$count=$m->where($id)->delete();
			if($count>0){
			     $this->success("成功删除该会员！");
			}else{
			     $this->error("操作失败！");
			}
		 }
		 //查询操作
		 public function search(){
		     $tiaojian=$_POST['tiaojian'];
			$keyword=$_POST['keyword'];
			$m=M("User");
			import("ORG.Util.Page");//导入分页类
			$data["{$tiaojian}"]=array("like","%".$keyword."%");
		     $count=$m->where($data)->count();//获取数据库中存在的总数
		     $page=new Page($count,5);//实例化分页类 传入总记录数和每页显示的记录数
		     $show=$page->show();//分页显示输出
			$arr=$m->query("select * from t_user,t_userlevel where ".$tiaojian." like '%".$keyword."%'");
			$this->assign("user",$arr);
			$this->assign("show",$show);
			$this->display("index");
		 }
    }