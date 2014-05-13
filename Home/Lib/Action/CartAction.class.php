<?php
class CartAction extends Action{
	public function index(){
		//头部
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
}
?>