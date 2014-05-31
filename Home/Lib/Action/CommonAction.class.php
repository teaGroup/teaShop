<?php
	/**
	* 
	*/
	class CommonAction extends Action
	{
		Public function _initialize(){
				//头部
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
        	
			if(!isset($_SESSION['username']) || $_SESSION['username']==""){
				$this->error("请先登录",U('Index/index'));
			}
		}
	}
?>