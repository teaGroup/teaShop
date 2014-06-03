<?php
class ConsiAction extends CommonAction{
	public function index(){
		$useid = $_SESSION['id'];
		$addr = M('consigneeinfo');
		$addrlist = $addr->where("fk_User_Consi_Id='$useid'")->select();
		$this->assign('addrlist',$addrlist);
		$this->display();
	}

	public function option(){
		if($_POST['modify']){
			$consiid = $_POST['consiid'];
			$data['Consi_Name'] = $_POST['name'];
			$data['Consi_Addr'] = $_POST['addr'];
			$data['Consi_PostCode'] = $_POST['postcode'];
			$data['Consi_Tel'] = $_POST['tel'];
			$consi = M('consigneeinfo');
			$result = $consi->where("pk_ConsiInfo_Id='$consiid'")->save($data);
			if(empty($result)){
				$this->error("修改收获地址错误，请重试");
			}else{
				$this->success("修改收获地址成功",U('Consi/index'));
			}
		}

		if($_POST['delete']){
			$consiid = $_POST['consiid'];
			$consi = M('consigneeinfo');
			$result = $consi->where("pk_ConsiInfo_Id='$consiid'")->delete();
			if(empty($result)){
				$this->error("删除收获地址失败");
			}else{
				$this->success("删除收获地址成功",U('Consi/index'));
			}
		}
	}
}
?>