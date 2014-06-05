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
		     $keywords = $_GET['keywords'];
			if(isset($keywords)&&$keywords!=null){
			 $where['Goods_Name']=array('like',"%{$keywords}%");
			 $count=$m->where($where)->count();//获取数据库中存在的总数
		     $page=new Page($count,15);//实例化分页类 传入总记录数和每页显示的记录数
		     $show=$page->show();//分页显示输出
		     $arr=$m->where($where)->select();		 
			}
            $searchname=$_GET['name'];
            if(isset($searchname)&&$searchname!=null){
			$where['Goods_Name']=array('like',"%{$searchname}%");
			$count=$m->where($where)->count();//获取数据库中存在的总数
		    $page=new Page($count,15);//实例化分页类 传入总记录数和每页显示的记录数
		    $show=$page->show();//分页显示输出
		    $arr=$m->where($where)->select();	
			}
			$this->assign('name',$name);
			$this->assign("show",$show);
			$this->assign('data',$arr);
			$this->display('index');	
		}
		public function sort(){
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
		 
			$sort=$_GET['sort'];
			$keywords=$_GET['keywords'];
			$m=M('goodsinfo');
			import("ORG.Util.Page");//导入分页类
		    $data['sort']=array('like',"%".$keywords."%");
			$arr=$m->where($data)->order($sort)->select();
		    $count=$m->where($data)->count();//获取数据库中存在的总数
		    $page=new Page($count,15);//实例化分页类 传入总记录数和每页显示的记录数
		    $show=$page->show();//分页显示输出
			$this->assign("data",$arr);
			$this->assign("show",$show);
			$this->display("index");
		}

		public function sortgoods(){
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

        	$name=$_GET['name'];
		    $m=M("Goodsview");
		    import("ORG.Util.Page");

		    $arr_c=$m->query("select count(*) from t_goodsview where Classifi_Name in 
								(select Classifi_Name from t_classifi where fk_Classifi_ParentId in 
									(select pk_Classifi_Id from t_classifi where Classifi_Name='$name') or Classifi_Name='$name')");
			$count=$arr_c[0]['count(*)'];
			$page=new Page($count,15);//实例化分页类 传入总记录数和每页显示的记录数
		    $show=$page->show();//分页显示输出
			$data=$m->query("select * from t_goodsview where Classifi_Name in 
								(select Classifi_Name from t_classifi where fk_Classifi_ParentId in 
									(select pk_Classifi_Id from t_classifi where Classifi_Name='$name') or Classifi_Name='$name') order by Goods_SellTime desc limit {$page->firstRow},{$page->listRows}");
		    if(empty($data)){
		    	$info = "暂无此类商品";
		    	$this->assign("info",$info);
		    }else{
		    	$this->assign("info","");
		    	$this->assign("data",$data);
		    	$this->assign("show",$show);
		    }
		    $this->display('More:asort');
		}

		public function searchforwt(){
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

        	$name=$_GET['name'];
        	$wt1 = $_GET['wt1'];
        	$wt2 = $_GET['wt2'];
        	$m=M("Goodsview");
		    import("ORG.Util.Page");

		    $arr_c = $m->query("select count(*) from t_goodsview where Classifi_Name='$name' and Goods_NetContent BETWEEN $wt1 and $wt2");
		    $count=$arr_c[0]['count(*)'];
			$page=new Page($count,15);//实例化分页类 传入总记录数和每页显示的记录数
		    $show=$page->show();//分页显示输出
		    $data = $m->query("select * from t_goodsview where Classifi_Name='$name' and Goods_NetContent BETWEEN $wt1 and $wt2");
		    if(empty($data)){
		    	$info = "暂无此类商品";
		    	$this->assign("info",$info);
		    }else{
		    	$this->assign("info","");
		    	$this->assign("data",$data);
		    	$this->assign("show",$show);
		    }
		    $this->display('More:asort');
		 }

		 public function searchforprice(){
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

        	$price1 = $_GET['price1'];
        	$price2 = $_GET['price2'];
        	$name = $_GET['name'];

        	$m=M("Goodsview");
		    import("ORG.Util.Page");

		    $arr_c = $m->query("select count(*) from t_goodsview where Classifi_Name='$name' and Goods_Price BETWEEN $price1 and $price2");
		    $count=$arr_c[0]['count(*)'];
			$page=new Page($count,15);//实例化分页类 传入总记录数和每页显示的记录数
		    $show=$page->show();//分页显示输出
		    
		    $data = $m->query("select * from t_goodsview where Classifi_Name='$name' and Goods_Price BETWEEN $price1 and $price2");
		    //dump($m);
		    if(empty($data)){
		    	$info = "暂无此类商品";
		    	$this->assign("info",$info);
		    }else{
		    	$this->assign("info","");
		    	$this->assign("data",$data);
		    	$this->assign("show",$show);
		    }
		    $this->display('More:asort');
		 }

		 public function searchbyprice(){
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

        	$price1 = $_GET['price1'];
        	$price2 = $_GET['price2'];

        	$m=M("Goodsview");
		    import("ORG.Util.Page");

		    $arr_c = $m->query("select count(*) from t_goodsview where Goods_Price BETWEEN $price1 and $price2");
		    $count=$arr_c[0]['count(*)'];
			$page=new Page($count,15);//实例化分页类 传入总记录数和每页显示的记录数
		    $show=$page->show();//分页显示输出
		    
		    $data = $m->query("select * from t_goodsview where Goods_Price BETWEEN $price1 and $price2");
		    //dump($m);
		    if(empty($data)){
		    	$info = "暂无此类商品";
		    	$this->assign("info",$info);
		    }else{
		    	$this->assign("info","");
		    	$this->assign("data",$data);
		    	$this->assign("show",$show);
		    }
		    $this->display('More:asort');
		 }
	}
?>