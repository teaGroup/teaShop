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
	   $this->assign("other",$other);
	   $this->assign("list",$list);
       
	   $this->display();
	}
	//评论列表
	public function common_list(){
			    if(!isset($_SESSION['username']) || $_SESSION['username']==""){
            $url ="Public:top1";
        }else{
            $url ="Public:top2";
         }
         $username =  $_SESSION['username'];
          $goodsnum = 0;
        
        $this->assign("url",$url);
        $this->assign("username",$username);
        $this->assign("goodsnum",$goodsnum);
	   $this->display();
		
	}
}
?>