<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
        if(!isset($_SESSION['username']) || $_SESSION['username']==""){
            $url ="Public:top1";
        }else{
            $url ="Public:top2";
         }
         $username =  $_SESSION['username'];
    	//新品
    	//热卖
    	//茶具
    	//热销礼品
    	//排行榜周
    	//排行榜月
    	//排行榜年
    	//绿茶
    	//红茶
    	//白茶
    	//黑茶
    	//乌龙茶
    	//花草茶
    	//茶具
        
        $this->assign("url",$url);
        $this->assign("username",$username);
    	$this->display();
   }
}