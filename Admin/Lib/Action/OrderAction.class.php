<?php
class OrderAction extends Action{
	public function index(){
		header("Content-type:text/html;charset=utf-8");
		import("ORG.Util.Page");

		$orderv = M('orderview');
		$order = M('order');
		$count=$orderv->count();
		$page=new Page($count,5);//实例化分页类 传入总记录数和每页显示的记录数
		$show=$page->show();//分页显示输出

		$orderlist1 = $order->field('pk_Order_Id')->order('Order_Time desc')->select();
		$orderlist2 = $orderv->limit($page->firstRow,$page->listRows)->order('Order_Time desc')->select();

		$date = date("Y-m-d H:i:s");
		$this->assign('date',$date);
		$loop = 1;
		$this->assign('orderlist1',$orderlist1);
		$this->assign("orderlist2",$orderlist2);
		$this->assign('loop',$loop);
		$this->assign("show",$show);
		$this->display();
	}

	public function query(){
		header("Content-type:text/html;charset=utf-8");
		import("ORG.Util.Page");
		$username = $_SESSION['username'];
		$orderv = M('orderview');
		$order = M('order');

			if($_GET){
				if($_GET['state']!=""){
					if($_GET['state']==0){
						$where['Order_State'] = "未处理";
					}elseif ($_GET['state']==1) {
						$where['Order_State'] = "正在处理";
					}else{
						$where['Order_State'] = "已处理";
					}

				}elseif($_GET['date']!=""){
					if($_GET['date']=='day'){
						$where='date(Order_Time)=CURDATE()';
					}elseif($_GET['date']=='week'){
						$where='week(Order_Time)=week(now())';
					}elseif($_GET['date']=='month'){
						$where='month(Order_Time)=month(CURDATE()) and year(Order_Time)=year(CURDATE())';
					}elseif ($_GET['date']=='year') {
						$where='year(Order_Time)=year(curdate())';
					}

				}elseif($_GET['search']!=""){
					$conditions = $_GET['condition'];
					if($_GET['option']=='goodsname'){
						$where['Goods_Name'] = array('like',"%$conditions%");

					}elseif($_GET['option']=='order'){
						$where['Order_Id'] = $conditions;

					}elseif($_GET['option']=='orderOwner'){
						$where['Order_Owner'] = $conditions;
						
					}
				}elseif($_GET['query']!=""){
					$first = $_GET['first'];
					$end = $_GET['end'];
					$where['Order_Time']=array(between,array($first,$end));
				}
				
			}	
		$count=$orderv->where($where)->count();
		$page=new Page($count,5);
		$show=$page->show();
		$orderlist1 = $order->order('Order_Time desc')->field('pk_Order_Id')->where($where)->select();
		$orderlist2 = $orderv->limit($page->firstRow,$page->listRows)->order('Order_Time desc')->where($where)->select();		
		
		$loop = 1;
		$this->assign('orderlist1',$orderlist1);
		$this->assign("orderlist2",$orderlist2);
		$this->assign('loop',$loop);
		$this->assign("show",$show);
		$this->display('index');
	}

	public function deleteG(){
		$goodsid = $_GET['goodsid'];
		$orderid = $_GET['orderid'];

		$orderit = M();
		$sql="call DorderIt($goodsid,$orderid,@result);";
		$result = $orderit->query($sql);
		if(empty($result)){
			$this->error("商品删除失败，请重试!!!");
		}else{
			$this->success("删除成功",U('Order/index'));
		}
	}

	public function deleteO(){
		$orderid = $_GET['id'];
		$where['pk_OrderOrderIt_id']=$orderid;

		$orderit = M('orderitem');
		$orderv = M('orderview');
		$orderit->startTrans();
		$order = M('order');
		$list = $orderv->field('sum(Goods_RewardCred) as credit')->where("Order_Id='$orderid'")->select();
		$credit = $list[0]['credit'];
		$result = $orderit->where($where)->delete();

		if(empty($result)){
			$this->error("删除订单失败，请重试!!!");
		}else{
			$where['pk_Order_Id']=$orderid;
			$list = $order->field('Order_Owner')->where($where)->find();
			$username = $list['Order_Owner'];
			$result2 = $order->where($where)->delete();
			if(empty($result2)){
				$orderit->rollback();
				$this->error("删除订单失败，请重试!!!");
			}else{
				$user = M();
				$sql = "update t_user set User_Credit=User_Credit-$credit where User_Name='$username'";
				$result3 = $user->execute($sql);
				if(empty($result3)){
					$orderit->rollback();
					$this->error("删除订单失败，请重试!!!");
				}else{
					$orderit->commit();
					$this->success("删除订单成功",U('Order/index'));
				}
				
			}
		}
	}

	public function modify(){
		$orderid = $_GET['id'];
		$order = M('orderview');
		$where['Order_Id']=$orderid;

		$sql="select goods.Goods_img,goods.Goods_Name,goods.Goods_Price,goods.Goods_RewardCred,goods.Goods_RewardCred*OrderIt_Num SubCredit,Goods_Id,OrderIt_Num,
					Order_SubSum,Order_Id,Order_State from t_goodsinfo goods,t_orderview 
					where pk_GoodsInfo_Id=Goods_Id and Order_Id=$orderid";
		$orderinfo=M()->query($sql);
		$sql = "select Sum(Order_SubSum) as total,Sum(goods.Goods_RewardCred*OrderIt_Num) as totalC 
					from t_goodsinfo goods,t_orderview where pk_GoodsInfo_Id=Goods_Id and Order_Id=$orderid";
		$total = M()->query($sql);
		$consiinfo = $order->distinct(true)->field('Consi_Id,Order_Owner,Consi_Name,Consi_Addr,Consi_PostCode,Consi_Tel,Order_Time')->where($where)->select();

		
		$this->assign('orderinfo',$orderinfo);
		$this->assign('consiinfo',$consiinfo);
		$this->assign('orderid',$orderid);
		$this->assign('orderstate',$orderinfo[0]['Order_State']);
		$this->assign('total',$total[0]['total']);
		$this->assign('totalc',$total[0]['totalC']);
		$this->display();
	}

	public function update(){
		if($_POST['states']){
			$orderid = $_POST['orderid'];
			$data['Order_State'] = $_POST['state'];
			$order = M('order');
			$result = $order->where("pk_Order_Id='$orderid'")->save($data);
			if(empty($result)){
				$this->error('修改订单状态失败');
			}else{
				$this->success('修改订单状态成功',U('Order/modify',array('id'=>$orderid)));
			}
		}
		if($_POST['Mnum']){
			$orderid = $_POST['orderid'];
			$goodsid = $_POST['goodsid'];
			$num = $_POST['num'];
			$m = M();
			$sql = "call Mnum($orderid,$goodsid,$num,@result)";
			$result = $m->execute($sql);
			if(empty($result)){
				$this->error('修改商品数量失败');
			}else{
				$this->success('修改商品数量成功',U('Order/modify',array('id'=>$orderid)));
			}
		}
		if($_POST['Mconsi']){
			$orderid = $_POST['orderid'];
			$consiid = $_POST['consiid'];
			$data['Consi_Name'] = $_POST['name'];
			$data['Consi_Addr'] = $_POST['addr'];
			$data['Consi_PostCode'] = $_POST['postcode'];
			$data['Consi_Tel'] = $_POST['tel'];
			$consi = M('Consigneeinfo');
			$result = $consi->where("pk_ConsiInfo_Id='$consiid'")->save($data);
			if(empty($result)){
				$this->error('修改收获地址失败');
			}else{
				$this->success('修改收获地址成功',U('Order/modify',array('id'=>$orderid)));
			}
		}
	}
}
?>