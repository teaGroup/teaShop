<?php
class OrderAction extends CommonAction{
	public function consignee(){
		//订单列表
		$userid = $_SESSION['id'];
       	$cart = M();
       	$sql="select * from t_vcart where User_id=$userid";
		$cartlist=$cart->query($sql);
        $sql = "select sum(Sum) sum from t_vcart GROUP BY User_Id HAVING User_Id=$userid;";
		$sum = $cart->query($sql);
        $total = $sum[0][sum];

		$this->assign('cartlist',$cartlist);
        $this->assign('total',$total);
		//收货人地址
		$consignee = M('consigneeinfo');
		$where['fk_User_Consi_Id']=$userid;
		$result = $consignee->where($where)->select();
		$this->assign("oldaddr",$result);
		$this->display();
	}
	//检查用户是否有地址
	public function check(){
		$consignee = M('consigneeinfo');
		$userid = $_SESSION['id'];
		$where['fk_User_Consi_Id']=$userid;
		$result = $consignee->where($where)->select();
		if($result){
			$this->ajaxReturn('','',1);
		}else{
			$this->ajaxReturn('','',0);
		}
		
	}
	//提交订单
	public function add(){
		header("Content-type:text/html;charset=utf-8");
		$method = $_POST['method'];
		if($method[0]=="old"){
			$consigid = $_POST['addr'][0];
		}else{
			$consignee = M('consigneeinfo');
			$consignee->create();
			$consignee->pk_ConsiInfo_Id=null;
			$consignee->fk_User_Consi_Id=$_SESSION['id'];
			//dump($consignee);
			//exit();

			$consigid = $consignee->add();

		}

		if($consigid){
			//$this->redirect('Index/index');
			$order = M('order');
			$data['pk_Order_Id'] = null;
			$data['fk_Consi_Order_Id'] = $consigid;
			$data['Order_Sum'] = $_POST['sum'];
			$data['Order_Owner'] = $_SESSION['username'];
			$data['Order_Time'] = date("Y-m-d H:i:s");
			$order->create($data);
			$orderid = $order->add();
			//订单判断
			if($orderid){
				$userid = $_SESSION['id'];
				$cart = M('cart');
				$list = $cart->field('fk_Goods_Cart_Id as goodsid,Cart_BuyNum as num')
							->where(array('fk_User_Cart_Id'=>$userid))->select();

				$orderIt = M('orderitem');
				$orderIt->startTrans();
				$data['pk_OrderOrderIt_id'] = $orderid;
				for($i=0;$i<count($list);$i++){
					$data['pk_GoodsOrderIt_id'] = $list[$i]['goodsid'];
					$data['OrderIt_Num'] = $list[$i]['num'];
					$orderIt->create($data);
					$orderItid = $orderIt->add();
					if(empty($orderItid)){
						$orderIt->rollback();
						break;
					}
				}
				if($i==count($list)){
					$cart->where(array('fk_User_Cart_Id'=>$userid))->delete();
					$this->success("提交订单成功",U('Order/queryOrder'));
					$orderIt->commit();
				}else{
					$this->error("提交订单失败，请重新提交!!!");
				}
			}else{
				$this->error("提交订单失败，请重新提交!!!");
			}
		}else{
			$this->error('收货人地址错误，请重新添加!!!');
		}
	}

	public function queryOrder(){
		$this->display();
	}
	
}
?>