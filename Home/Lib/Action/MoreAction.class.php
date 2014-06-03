<?php
     class MoreAction extends Action{
	     public function index(){
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
		    //获取more页面显示的是何种商品
		    $name=$_GET['name'];
		    $m=M("Goodsview");
		    import("ORG.Util.Page");
		    switch($name){
		          case 'green':
			         //查找出所有是绿茶的商品
				    $arr_c=$m->query("select count(*) from t_Goodsview where Classifi_Name in (select Classifi_Name from t_Classifi where fk_Classifi_ParentId=1 or fk_Classifi_ParentId in (select pk_Classifi_Id from t_Classifi where fk_Classifi_ParentId='1') or pk_Classifi_Id=1)");
				    $count=$arr_c[0]['count(*)'];
				    $page=new Page($count,15);//实例化分页类 传入总记录数和每页显示的记录数
		              $show=$page->show();//分页显示输出
				    $data=$m->query("select * from t_Goodsview where Classifi_Name in (select Classifi_Name from t_Classifi where fk_Classifi_ParentId=1 or fk_Classifi_ParentId in (select pk_Classifi_Id from t_Classifi where fk_Classifi_ParentId='1') or pk_Classifi_Id=1) order by Goods_SellTime desc limit {$page->firstRow},{$page->listRows}");
		              $this->assign("data",$data);
		              $this->assign("show",$show);
		              $this->display();
				break;
			     case 'red':
				    //查找出所有是红茶的商品
				    $arr_c=$m->query("select count(*) from t_Goodsview where Classifi_Name in (select Classifi_Name from t_Classifi where fk_Classifi_ParentId=2 or fk_Classifi_ParentId in (select pk_Classifi_Id from t_Classifi where fk_Classifi_ParentId='2') or pk_Classifi_Id=2)");
				    $count=$arr_c[0]['count(*)'];
				    $page=new Page($count,15);//实例化分页类 传入总记录数和每页显示的记录数
		              $show=$page->show();//分页显示输出
				    $data=$m->query("select * from t_Goodsview where Classifi_Name in (select Classifi_Name from t_Classifi where fk_Classifi_ParentId=2 or fk_Classifi_ParentId in (select pk_Classifi_Id from t_Classifi where fk_Classifi_ParentId='2') or pk_Classifi_Id=2) order by Goods_SellTime desc limit {$page->firstRow},{$page->listRows}");
		              $this->assign("data",$data);
		              $this->assign("show",$show);
		              $this->display();
				break;
			     case 'white':
				    //查找出所有是白茶的商品
				    $arr_c=$m->query("select count(*) from t_Goodsview where Classifi_Name in (select Classifi_Name from t_Classifi where fk_Classifi_ParentId=6 or fk_Classifi_ParentId in (select pk_Classifi_Id from t_Classifi where fk_Classifi_ParentId='6') or pk_Classifi_Id=6)");
				    $count=$arr_c[0]['count(*)'];
				    $page=new Page($count,15);//实例化分页类 传入总记录数和每页显示的记录数
		              $show=$page->show();//分页显示输出
				    $data=$m->query("select * from t_Goodsview where Classifi_Name in (select Classifi_Name from t_Classifi where fk_Classifi_ParentId=6 or fk_Classifi_ParentId in (select pk_Classifi_Id from t_Classifi where fk_Classifi_ParentId='6') or pk_Classifi_Id=6) order by Goods_SellTime desc limit {$page->firstRow},{$page->listRows}");
		              $this->assign("data",$data);
		              $this->assign("show",$show);
		              $this->display();
				break;
				case 'black':
				    //查找出所有是黑茶的商品
				    $arr_c=$m->query("select count(*) from t_Goodsview where Classifi_Name in (select Classifi_Name from t_Classifi where fk_Classifi_ParentId=4 or fk_Classifi_ParentId in (select pk_Classifi_Id from t_Classifi where fk_Classifi_ParentId='4') or pk_Classifi_Id=4)");
				    $count=$arr_c[0]['count(*)'];
				    $page=new Page($count,15);//实例化分页类 传入总记录数和每页显示的记录数
		              $show=$page->show();//分页显示输出
				    $data=$m->query("select * from t_Goodsview where Classifi_Name in (select Classifi_Name from t_Classifi where fk_Classifi_ParentId=4 or fk_Classifi_ParentId in (select pk_Classifi_Id from t_Classifi where fk_Classifi_ParentId='4') or pk_Classifi_Id=4) order by Goods_SellTime desc limit {$page->firstRow},{$page->listRows}");
		              $this->assign("data",$data);
		              $this->assign("show",$show);
		              $this->display();
				break;
			     case 'wulong':
				    //查找出所有是乌龙茶的商品
				    $arr_c=$m->query("select count(*) from t_Goodsview where Classifi_Name in (select Classifi_Name from t_Classifi where fk_Classifi_ParentId=3 or fk_Classifi_ParentId in (select pk_Classifi_Id from t_Classifi where fk_Classifi_ParentId='3') or pk_Classifi_Id=3)");
				    $count=$arr_c[0]['count(*)'];
				    $page=new Page($count,15);//实例化分页类 传入总记录数和每页显示的记录数
		              $show=$page->show();//分页显示输出
				    $data=$m->query("select * from t_Goodsview where Classifi_Name in (select Classifi_Name from t_Classifi where fk_Classifi_ParentId=3 or fk_Classifi_ParentId in (select pk_Classifi_Id from t_Classifi where fk_Classifi_ParentId='3') or pk_Classifi_Id=3) order by Goods_SellTime desc limit {$page->firstRow},{$page->listRows}");
		              $this->assign("data",$data);
		              $this->assign("show",$show);
		              $this->display();
				break;
				case 'flower':
				     //查找出所有是花茶的商品
				    $arr_c=$m->query("select count(*) from t_Goodsview where Classifi_Name in (select Classifi_Name from t_Classifi where fk_Classifi_ParentId=5 or fk_Classifi_ParentId in (select pk_Classifi_Id from t_Classifi where fk_Classifi_ParentId='5') or pk_Classifi_Id=5)");
				    $count=$arr_c[0]['count(*)'];
				    $page=new Page($count,15);//实例化分页类 传入总记录数和每页显示的记录数
		              $show=$page->show();//分页显示输出
				    $data=$m->query("select * from t_Goodsview where Classifi_Name in (select Classifi_Name from t_Classifi where fk_Classifi_ParentId=5 or fk_Classifi_ParentId in (select pk_Classifi_Id from t_Classifi where fk_Classifi_ParentId='5') or pk_Classifi_Id=5) order by Goods_SellTime desc limit {$page->firstRow},{$page->listRows}");
		              $this->assign("data",$data);
		              $this->assign("show",$show);
		              $this->display();
				break;
				case 'chaju':
				    //查找出所有是茶具的商品
				    $arr_c=$m->query("select count(*) from t_Goodsview where Classifi_Name in (select Classifi_Name from t_Classifi where fk_Classifi_ParentId=7 or fk_Classifi_ParentId in (select pk_Classifi_Id from t_Classifi where fk_Classifi_ParentId='7') or pk_Classifi_Id=7)");
				    $count=$arr_c[0]['count(*)'];
				    $page=new Page($count,15);//实例化分页类 传入总记录数和每页显示的记录数
		              $show=$page->show();//分页显示输出
				    $data=$m->query("select * from t_Goodsview where Classifi_Name in (select Classifi_Name from t_Classifi where fk_Classifi_ParentId=7 or fk_Classifi_ParentId in (select pk_Classifi_Id from t_Classifi where fk_Classifi_ParentId='7') or pk_Classifi_Id=7) order by Goods_SellTime desc limit {$page->firstRow},{$page->listRows}");
		              $this->assign("data",$data);
		              $this->assign("show",$show);
		              $this->display();
				break;
		     }
		}
	}