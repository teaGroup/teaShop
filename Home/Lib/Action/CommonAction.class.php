<?php
	/**
	* 
	*/
	class CommonAction extends Action
	{
		Public function _initialize(){
			if(!isset($_SESSION['username']) || $_SESSION['username']==""){
				$this->error("请先登录");
			}
		}
	}
?>