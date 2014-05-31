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
		$userid = $_SESSION['id'];
		$cart = M('cart');
		$list = $cart->field('fk_Goods_Cart_Id as goodsid,Cart_BuyNum as num')
					->where(array('fk_User_Cart_Id'=>$userid))->select();
		if(empty($list)){
			$this->error("请添加商品!!!");
		}else{
			$method = $_POST['method'];
			if($method[0]=="old"){
				$consigid = $_POST['addr'][0];
			}else{
				$consignee = D('consigneeinfo');

				$phone=$_POST['Consi_Tel'];
				$reg='/^(\d{3,4}\-)?[1-9]\d{6,7}$/';
				$bool = preg_match($reg,$phone);
				
				if($consignee->create()){
					$consignee->pk_ConsiInfo_Id=null;
					$consignee->fk_User_Consi_Id=$_SESSION['id'];
					$consigid = $consignee->add();
				}else{
					$this->error($consignee->getError());
				}
				//dump($consignee);
				//exit();
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
						$this->success("提交订单成功",U('Order/query'));
						$orderIt->commit();
					}else{
						$order->where("pk_Order_Id='$orderid'")->delete();
						$this->error("提交订单失败，请重新提交!!!");
					}
				}else{
					$this->error("提交订单失败，请重新提交!!!");
				}
			}else{
				$this->error('收货人地址错误，请重新添加!!!');
			}
		}
		
	}
	//显示订单
	public function index(){
		header("Content-type:text/html;charset=utf-8");
		import("ORG.Util.Page");
		$username = $_SESSION['username'];
		$orderv = M('orderview');
		$order = M('order');
		$count=$orderv->where(array('Order_Owner'=>$username))->count();
		$page=new Page($count,5);//实例化分页类 传入总记录数和每页显示的记录数
		$show=$page->show();//分页显示输出

		$orderlist1 = $order->order('Order_Time desc')->field('pk_Order_Id')
			->where(array('Order_Owner'=>$username))->select();

		$where['Order_Owner'] = $username;
		$orderlist2 = $orderv->limit($page->firstRow,$page->listRows)->
		    	order('Order_Time desc')->where($where)->select();
		
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

		$where['Order_Owner'] = $username;
		
		if($_GET){
			if($_GET['goodsname']){
				$goodsname = $_GET['goodsname'];
				$where['Goods_Name'] = array('like',"%$goodsname%");
			}elseif($_GET['state']==0){
				$where['Order_State'] = "未处理";
			}elseif($_GET['state']==1){
				$where['Order_State'] = "正在处理";
			}elseif($_GET['state']==2){
				$where['Order_State'] = "已处理";
			}
		}

		$count=$orderv->where($where)->count();
		$page=new Page($count,4);//实例化分页类 传入总记录数和每页显示的记录数
		$show=$page->show();//分页显示输出

		$orderlist1 = $order->order('Order_Time desc')->field('pk_Order_Id')
			->where(array('Order_Owner'=>$username))->select();

		$orderlist2 = $orderv->limit($page->firstRow,$page->listRows)->
		    	order('Order_Time desc')->where($where)->select();
		
		$loop = 1;
		$this->assign('orderlist1',$orderlist1);
		$this->assign("orderlist2",$orderlist2);
		$this->assign('loop',$loop);
		$this->assign("show",$show);
		$this->display('index');
	}
	
}
?>