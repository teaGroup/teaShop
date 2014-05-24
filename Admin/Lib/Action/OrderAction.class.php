<?php
class OrderAction extends Action{
	public function index(){
		header("Content-type:text/html;charset=utf-8");
		import("ORG.Util.Page");

		$orderv = M('orderview');
		$order = M();
		$count=$orderv->count();
		$page=new Page($count,5);//实例化分页类 传入总记录数和每页显示的记录数
		$show=$page->show();//分页显示输出

		$sql="select DISTINCT pk_Order_Id,Order_Time,Order_Sum from t_order,t_orderitem 
				where pk_OrderOrderIt_id=pk_Order_Id order by Order_Time desc";
		$orderlist1 = $order->query($sql);

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
		if($_POST){
			$goodsname = $_POST['goodsname'];
			$where['Goods_Name'] = array('like',"%$goodsname%");
		}else{
			if($_GET){

				if($_GET['state']==0){
					$where['Order_State'] = "未处理";
				}elseif ($_GET['state']==1) {
					$where['Order_State'] = "正在处理";
				}else{
					$where['Order_State'] = "已处理";
				}
			}			
		}

		$count=$orderv->where($where)->count();
		$page=new Page($count,5);//实例化分页类 传入总记录数和每页显示的记录数
		$show=$page->show();//分页显示输出

		$orderlist1 = $order->order('Order_Time desc')->field('pk_Order_Id,Order_Time,Order_Sum')
			->where(array('Order_Owner'=>$username),'pk_OrderOrderIt_id=pk_Order_Id')->select();

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