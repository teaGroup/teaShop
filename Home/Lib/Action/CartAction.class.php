<?php
class CartAction extends CommonAction{
	public function index(){
		
        //购物车列表
       	$userid = $_SESSION['id'];
        $username = $_SESSION['username'];
       	$cart = M();
       	$sql="select * from t_vcart where User_id=$userid";
		$cartlist=$cart->query($sql);
        $sql = "select sum(Sum) sum from t_vcart GROUP BY User_Id HAVING User_Id=$userid;";
		$sum = $cart->query($sql);
        $total = $sum[0][sum];

		$this->assign('cartlist',$cartlist);
        $this->assign('total',$total);
        $this->assign('userid',$userid);
        $this->assign('username',$username);
		$this->display();
	}
	//删除商品
    public function delete(){
        $cartid = $_GET['cartid'];
        $cart = M('cart');
        $where['pk_Cart_Id']=$cartid;
        $result=$cart->where($where)->delete();
        if(empty($result)){
            $this->error("删除失败!");
        }else{
            $this->success("删除成功！",U('Cart/index'));
        }
        
    }
    //更改商品数量
    public function modifyNum(){
        $num = $_POST['num'];
        $cartid = $_POST['cartid'];
        $goodsid = $_POST['goodsid'];

        $cart = M();
        $sql="call Unum($num,$cartid,$goodsid,@result)";
        $result=$cart->query($sql);
        if(empty($result)){
            $this->error('更改数量失败!');
        }else{
            $this->success("更改数量成功!",U('Cart/index'));
        }
    }
	
}

?>