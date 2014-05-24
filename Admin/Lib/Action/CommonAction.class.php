<?php
	/**
	* 
	*/
	class CommonAction extends Action
	{
		Public function _initialize(){
			if(!isset($_SESSION['adminname']) || $_SESSION['adminname']==""){
				$this->redirect('Login/login');
			}else{
				$adminname = $_SESSION['adminname'];
				$this->assign('adminname',$adminname);
			}
		}
	}
?>