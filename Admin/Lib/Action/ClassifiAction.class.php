<?php
    class ClassifiAction extends Action{
         //显示分类页
	    public function index(){
	      $m=M("Classifi");
		 import("ORG.Util.Page");//导入分页类
		 $count=$m->count();//获取数据库中存在的总数
		 $page=new Page($count,5);//实例化分页类 传入总记录数和每页显示的记录数
		 $show=$page->show();//分页显示输出
		 $arr=$m->limit($page->firstRow.','.$page->listRows)->select();
		 $this->assign("arr",$arr);
		 $this->assign("show",$show);
	      $this->display();
	    }
	    //添加分类
	    public function add(){
	        $m=M("Classifi");
		   $arr=$m->select();
		   $this->assign("list",$arr);
	        $this->display();
	    }
	    //将添加进来的数据插入到数据库中
	    public function insert(){
	       //获取表单传过来的值
		    $name=$_POST["name"];
		    $level=$_POST["level"];
		    $p_level=$_POST["p_level"];
		  //创建一个表对象，将传来的数据插入到数据库中
		    $m=M("Classifi");
		    $m->Classifi_Name=$name;
		    $m->Classifi_Level=$level;
		    if(!empty($p_level)){
		        $m->fk_Classifi_ParentId=$p_level;
		    }
		    $count=$m->add();
		  //判断操作是否成功
		    if($count>0){
		         $this->success("数据添加成功！","index");
		    }else{
		         $this->error("数据添加失败！");
		    }
	    }
	    //删除分类
	    public function del(){
	        //获取要删除的ID号
		   $id=$_GET["id"];
		   $m=M("Classifi");
		   $count=$m->where("pk_Classifi_Id={$id}")->delete();
		   if($count>0){
		       $this->success("数据删除成功！");
		   }else{
		       $this->error("数据删除失败！");
		   }
	    }
    }