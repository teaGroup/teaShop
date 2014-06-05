<?php
class GoodsInfoAction extends Action{
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
	    /********查找相应商品信息*********/
        $goodsid=$_GET['goodsid'];
	   $model=M("Goodsview");
	   $data['pk_Goodsinfo_Id']=$goodsid;
	   $list=$model->where($data)->select();
	   $other=$model->query("select * from t_Goodsview order by Goods_SellTime desc limit 0,3 ");
       //dump($other);
       //exit();
	   $this->assign("other",$other);
	   $this->assign("list",$list);
       
	   $this->display();
	}
	//评论列表
	public function common_list(){
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
	    
	    /******对商品的评价********/
	    $Goods_Id=$_GET['id'];
	    $m=M('Rerpview');
	    $data['fk_Goods_Review_Id']=$Goods_Id;
	    import("ORG.Util.Page");//导入分页类
	    $count=$m->where($data)->count();//获取数据库中存在的总数
	    $page=new Page($count,15);//实例化分页类 传入总记录数和每页显示的记录数
	    $show=$page->show();//分页显示输出
	    $arr_rev=$m->where($data)->limit($page->firstRow.','.$page->listRows)->order('Revi_Time desc')->select();
	    $this->assign("listRev",$arr_rev);
         $this->assign("url",$url);
         $this->assign("username",$username);
	    $this->assign("id",$Goods_Id);
	    $this->assign("show",$show);
	    $this->display();
		
	}
	
	//将用户评论的商品评价插入到数据库中
	public function insert_commo(){
	     if(!isset($_SESSION['username']) || $_SESSION['username']!=""){
            $username =  $_SESSION['username'];
        }else{
            $this->redirect('common_list','',3,'请先登录……');
         }
          $Goods_Id=$_GET['id'];
	    $str=$_POST['editor1'];
			if(!empty($str)){
			      $str=preg_replace("/(\!.*?)>/si",'',$str); //过滤DOCTYPE
				 $str=preg_replace("/(\/?html.*?)>/si",'',$str); //过滤html标签
				 $str=preg_replace("/(\/?head.*?)>/si",'',$str); //过滤head标签
				 $str=preg_replace("/(\/?meta.*?)>/si",'',$str); //过滤meta标签
				 $intro=preg_replace("/(\/?body.*?)>/si",'',$str); //过滤body标签
				 
               }
        $model=M('Review');
	   $model->pk_Review_Id=null;
	   $model->fk_Goods_Review_Id=$Goods_Id;
	   $model->Revi_Content=$intro;
	   $model->Revi_People=$username;
	   $model->Revi_Time=date('Y-m-d H:i:s');
	   $count=$model->add();
	   if($count>0){
	        $this->success("成功评价！");
	   } else{
	        $this->error("评价失败！");
	   }
	}
}
?>