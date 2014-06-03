<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
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

    	//新品
        $sql = "select Goods_Id,Goods_Name,Goods_Price,Goods_img from simpleginfo order by Goods_SellTime desc limit 10";
        $newgoods = $model->query($sql);
    	//热卖
        $sql = "select Goods_Id,Goods_Name,Goods_Price,Goods_img from simpleginfo order by Goods_SellNum limit 10";
        $hotgoods = $model->query($sql);
    	//茶具
        $sql = "select Goods_Id,Goods_Name,Goods_Price,Goods_img from simpleginfo where Classifi_Name='茶具' order by rand() limit 10";
        $jbchaju = $model->query($sql);
    	//热销礼品
        $sql = "select Goods_Id,Goods_Name,Goods_Price,Goods_img from simpleginfo 
                        where Goods_Name like '%礼盒%' order by Goods_SellNum  limit 10";
        $gift = $model->query($sql);
    	//排行榜周
        $sql = "select * from simpleginfo where week(Goods_BuyTime)=week(now()) order by Goods_SellNum desc limit 15";
        $rankingW = $model->query($sql);
    	//排行榜月
        $sql = "select * from simpleginfo where month(Goods_BuyTime)=month(CURDATE()) and 
                        year(Goods_BuyTime)=year(CURDATE()) order by Goods_SellNum desc limit 15";
        $rankingM = $model->query($sql);
    	//排行榜年
        $sql = "select * from simpleginfo where year(Goods_BuyTime)=year(curdate()) order by Goods_SellNum desc limit 15";
        $rankingY = $model->query($sql);
    	//绿茶
        $sql = "call QHsgoods('绿茶')";
        $lv = $model->query($sql);
    	//红茶
        $sql = "call QHsgoods('红茶')";
        $hong = $model->query($sql);
    	//白茶
        $sql = "call QHsgoods('白茶')";
        $bai = $model->query($sql);
    	//黑茶
        $sql = "call QHsgoods('黑茶')";
        $hei = $model->query($sql);
    	//乌龙茶
        $sql = "call QHsgoods('乌龙茶')";
        $wu = $model->query($sql);
    	//花草茶
        $sql = "call QHsgoods('花草茶')";
        $hua = $model->query($sql);
    	//茶具
        $sql = "call QHsgoods('茶具')";
        $chaju = $model->query($sql);
        //购物车
		
		
		$m=M("news");
		$news=$m->select();
		$n=M("notice");
		$noti=$n->select();
		$this->assign("news",$news);
		$this->assign("notice",$noti);
        $this->assign("username",$username);

        $this->assign('newgoods',$newgoods);
        $this->assign('hotgoods',$hotgoods);
        $this->assign('jbchaju',$jbchaju);
        $this->assign('gift',$gift);
        $this->assign('lv',$lv);
        $this->assign('hong',$hong);
        $this->assign('bai',$bai);
        $this->assign('hei',$hei);
        $this->assign('wu',$wu);
        $this->assign('hua',$hua);
        $this->assign('chaju',$chaju);
        $this->assign('rankingW',$rankingW);
        $this->assign('rankingM',$rankingM);
        $this->assign('rankingY',$rankingY);
    	$this->display();
   }
   
   public function news(){
        if(!isset($_SESSION['username']) || $_SESSION['username']==""){
            $url ="Public:top1";
        }else{
            $url ="Public:top2";
         }
         $username =  $_SESSION['username'];
		$id=$_GET["id"];
		$m=M("News");
		$data["pk_News_Id"]=$id;
		$arr=$m->where($data)->find();
        $this->assign("url",$url);
		$this->assign("data",$arr);
        $this->assign("username",$username);
	    $this->display();
   }
   public function notice(){
        if(!isset($_SESSION['username']) || $_SESSION['username']==""){
            $url ="Public:top1";
        }else{
            $url ="Public:top2";
         }
         $username =  $_SESSION['username'];
		$id=$_GET["id"];
		$m=M("Notice");
		$data["pk_Notice_Id"]=$id;
		$arr=$m->where($data)->find();
        $this->assign("url",$url);
		$this->assign("data",$arr);
        $this->assign("username",$username);
	    $this->display();
   }
}