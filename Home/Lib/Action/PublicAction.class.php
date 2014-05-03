<?php
	class PUblicAction extends Action{
		function code(){
			import('ORG.Util.Image');
			Image::buildImageVerify();
		}
		public function header(){
			$this->display();
		}
		public function footer(){
			$this->display();
		}
	}
?>