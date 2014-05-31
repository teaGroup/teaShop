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
    //添加商品到购物车
    public function add(){
        $item_num = $_POST['item_number'];
        $goodsid = $_POST['goodsid'];
        $userid = $_SESSION['id'];

        $goods = M('goodsinfo');
        $result = $goods->field('Goods_Price')->where("pk_GoodsInfo_Id='$goodsid'")->find();
        $price = $result['Goods_Price'];

        $cart = M('cart');
        $result = $cart->where("fk_Goods_Cart_Id='$goodsid' and fk_User_Cart_Id='$userid'")->find();
        if(!empty($result)){
            $num =  $cart->field('Cart_BuyNum')->where("fk_Goods_Cart_Id='$goodsid' and fk_User_Cart_Id='$userid'")->find();
            $item_num = $item_num+$num['Cart_BuyNum'];
            $sum = $price*$item_num;
            $data['Cart_Sum'] = $sum;
            $data['Cart_BuyNum'] = $item_num;
            $result = $cart->where("fk_Goods_Cart_Id='$goodsid' and fk_User_Cart_Id='$userid'")->save($data);
        }else{
            $sum = $price*$item_num;
            $data['fk_User_Cart_Id'] = $userid;
            $data['fk_Goods_Cart_Id'] = $goodsid;
            $data['Cart_Sum'] = $sum;
            $data['Cart_BuyNum'] = $item_num;
            $result = $cart->add($data);
        }
        if($result){
            $this->success("商品添加成功");
        }else{
            $this->error("商品添加失败，请重试");
        }
    }
	
}

?>