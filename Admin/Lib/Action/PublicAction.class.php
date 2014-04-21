<?php
	class PUblicAction extends Action{
		function code(){
			import('ORG.Util.Image');
			Image::buildImageVerify();
		}
	}
?>