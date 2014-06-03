<?php
     class NewsAction extends Action{
	     //分页显示所有新闻内容
	    public function index(){
	         $m=M("News");
		     import("ORG.Util.Page");//导入分页类
		     $count=$m->count();//获取数据库中存在的总数
		     $page=new Page($count,5);//实例化分页类 传入总记录数和每页显示的记录数
		     $show=$page->show();//分页显示输出
		     $arr=$m->limit($page->firstRow.','.$page->listRows)->select();
		     $this->assign("arr",$arr);
		     $this->assign("show",$show);
	         $this->display();
	    }
	 	 //添加新闻
	    public function add(){
	         $m=M("News");
		     $arr=$m->select();
		     $this->assign("list",$arr);
	         $this->display();
	    }
	    //将添加进来的新闻插入到数据库中
	    public function insert(){
	       //获取表单传过来的值
		    $title=$_POST["news_title"];
		    $content=stripslashes($_POST["news_content"]);
		  //创建一个表对象，将传来的数据插入到数据库中
		    $m=M("news");
		    $m->News_Title=$title ;
		    $m->News_Content=$content;
			$m->News_PubDate=date('Y-m-d H:i:s');
		    $count=$m->add();
		  //判断操作是否成功
		    if($count>0){
		         $this->success("数据添加成功！","index");
		    }else{
		         $this->error("数据添加失败！");
		    }
		}
		//删除新闻
	    public function del(){
	       //获取要删除的ID号
		   $id=$_GET["id"];
		   $m=M("News");
		   $count=$m->where("pk_News_Id={$id}")->delete();
		   if($count>0){
		       $this->success("数据删除成功！");
		   }else{
		       $this->error("数据删除失败！");
		   }	   
		}
		//显示修改页面
		public function modify(){
		    $id=$_GET["id"];
			$m=M("News");
			$data["pk_News_Id"]=$id;
			$arr=$m->where($data)->find();
			//print_r($arr);
		     $this->assign("data",$arr);
			$this->display();	
			}
		public function update(){
		      $id=$_POST['id'];
               $title=$_POST['news_title'];	
               $content=$_POST['news_content'];
               $m=M("News");
			//$data['pk_News_Id']=$id;
			if(!empty($title)){
			     $data['News_Title']=$title;
			}
			if(!empty($content)){
			     $data['News_Content']=$content;
			}
		     $data["News_PubDate"]=date('Y-m-d H:i:s');
			 echo "<pre>";
			 print_r($data);
			 echo "</pre>";
			 
			$count=$m->where("pk_News_Id={$id}")->save($data);
			if($count>0){
			    $this->success("数据修改成功！","index");
			}else{
			    $this->error("数据修改失败！");
			}
	    }
	}


?>