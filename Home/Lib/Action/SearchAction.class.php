<?php
    class SearchAction extends Action{
		public function index(){
		if(!isset($_SESSION['username']) || $_SESSION['username']==""){
            $url ="Public:top1";
        }else{
            $url ="Public:top2";
         }
         $username =  $_SESSION['username'];

        
        $this->assign("url",$url);
        $this->assign("username",$username);
		$this->display();
		}
		/******搜索*******/
		public function search(){
			$model = M();
        	if(!isset($_SESSION['username']) || $_SESSION['username']==""){
           		$url ="Public:top1";
            	$goodsnum = 0;
       		}else{
            	$userid = $_SESSION['id'];
            	$sql="select count(*) num from t_vcart where User_Id=$userid";
            	$list = $model->query($sql);
            	$goodsnum = $list[0][num];
            	$url ="Public:top2";
         	}
        	 $username =  $_SESSION['username'];
		 
	    	$this->assign("url",$url);
        	$this->assign("username",$username);
        	$this->assign("goodsnum",$goodsnum);

			$m=M('goodsinfo');
			 import("ORG.Util.Page");//导入分页类
		     $count=$m->count();//获取数据库中存在的总数
		     $page=new Page($count,5);//实例化分页类 传入总记录数和每页显示的记录数
		     $show=$page->show();//分页显示输出
		     $data=$m->limit($page->firstRow.','.$page->listRows)->select();
		     $this->assign("show",$show);
			if(isset($_GET['keywords'])&&$_GET['keywords']!=null){
				$where['Goods_Name']=array('like',"%{$_GET['keywords']}%");
			}
			$arr=$m->where($where)->select();
			
			$n=M('review');
			$result=$n->where("fk_Goods_Review_Id")->count();
			$this->assign('data',$result);
			$this->assign('data',$arr);
			$this->display('index');	
		}
		public function sort(){
		if(!isset($_SESSION['username']) || $_SESSION['username']==""){
            $url ="Public:top1";
        }else{
            $url ="Public:top2";
         }
         $username =  $_SESSION['username']; 
         $this->assign("url",$url);
         $this->assign("username",$username);
		 
			$sort=$_POST['sort'];
			$keywords=$_POST['keywords'];
			$m=M('goodsinfo');
			import("ORG.Util.Page");//导入分页类
		    $data['sort']=array('like',"%".$keywords."%");
			$arr=$m->where($data)->order($sort)->select();
		     $count=$m->where($data)->count();//获取数据库中存在的总数
		     $page=new Page($count,5);//实例化分页类 传入总记录数和每页显示的记录数
		     $show=$page->show();//分页显示输出
			$this->assign("data",$arr);
			$this->assign("show",$show);
			$this->display("index");
		}
	}
?>