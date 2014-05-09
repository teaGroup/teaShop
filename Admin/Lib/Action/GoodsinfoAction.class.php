<?php
     class GoodsinfoAction extends Action{
	     //添加商品信息
		public function add(){
		     $m=M("Classifi");
			$arr=$m->select();
			$this->assign("classifi",$arr);
		     $this->display();
		}
		//将添加表单中的信息插入到数据库中
		public function insert(){
		     $name=$_POST['name'];
		     //$img=$_POST['img'];
		     $sell=$_POST['sell'];
		     $num=$_POST['num'];
		     $sellTime=$_POST['sellTime'];
		     $price=$_POST['price'];
		     $rewardCred=$_POST['rewardCred'];
		     $intro=$_POST['intro'];
		     $netContent=$_POST['netContent'];
		     $classifi=$_POST['classifi'];
		     $unit=$_POST['unit'];
			$model=M("Goodsinfo");
			if(!empty($classifi)){
			    $m=M("Classifi");
			    //$t_id=$m->query("select pk_Classifi_Id from t_Classifi where Classifi_Name='{$classifi}'");
			    $data['Classifi_Name']=$classifi;
			    $t_id=$m->where($data)->select();
			    $model->fk_Classifi_Goods_Id=$t_id[0]['pk_Classifi_Id'];
			}
			$model->Goods_Name=$name;
			if(!empty($sell)){
			    $model->Goods_IsSell=$sell;
			}
			$model->Goods_Num= $num;
			$model->Goods_SellTime=$sellTime;
			$model->Goods_Price=$price;
			if(!empty($rewardCred)){
			    $model->Goods_RewardCred=$rewardCred;
			}
			if(!empty($intro)){
			    $model->Goods_Intro=$intro;
			}
			import('ORG.Net.UploadFile');
               $upload = new UploadFile();// 实例化上传类
               $upload->maxSize  = 3145728 ;// 设置附件上传大小
               $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
               $upload->savePath =  './Uploads/';// 设置附件上传目录
			if(!$upload->upload()) {// 上传错误提示错误信息
                      $this->error($upload->getErrorMsg());
               }else{// 上传成功 获取上传文件信息
                      $info =  $upload->getUploadFileInfo();
               }
			if(!empty($info)){
			     $model->Goods_img='__ROOT__/Uploads/'.$info[0]['savename']; 
		     }
			if(!empty($unit)){
			    $model->Goods_Unit=$unit;
			}
			if(!empty($netContent)){
			    $model->Goods_NetContent=$netContent;
			}
			$count=$model->add();
			if($count>0){
			    $this->success("商品信息添加成功！","index");
			}else{
			    $this->error("商品信息添加失败！");
			}
		}
		//浏览商品信息
		public function index(){
		    $m=M(Goodsinfo);
		    import("ORG.Util.Page");//导入分页类
		    $count=$m->count();//获取数据库中存在的总数
		    $page=new Page($count,5);//实例化分页类 传入总记录数和每页显示的记录数
		    $show=$page->show();//分页显示输出
		    $list=$m->query("select pk_GoodsInfo_Id,Goods_Name,Goods_IsSell,Goods_Num,Goods_SellTime,Goods_Price,Goods_RewardCred,Goods_Intro,Goods_img,Goods_NetContent,Goods_Unit,Goods_SellNum,Classifi_Name from t_goodsinfo,t_Classifi where t_goodsinfo.fk_Classifi_Goods_Id=t_Classifi.pk_Classifi_Id limit ".$page->firstRow.','.$page->listRows);
		    $this->assign("list",$list);
		    $this->assign("show",$show);
		    $this->display();
		}
		//修改商品信息跳转的页面
		public function modify(){
		       $id=$_POST['id'];
		       $m=M("Goodsinfo");
			  $data=$m->query("select * from t_Classifi,t_goodsinfo where pk_GoodsInfo_Id={$id}");
			  $this->assign("data",$data);
			  $this->display();
		}
		//将修改表单中的数据在数据库中进行修改
		public function update(){
		     $id=$_POST['id'];
		     $name=$_POST['name'];
		     $img=$_POST['img'];
		     $sell=$_POST['sell'];
		     $num=$_POST['num'];
		     $sellTime=$_POST['sellTime'];
		     $price=$_POST['price'];
		     $rewardCred=$_POST['rewardCred'];
		     $intro=$_POST['intro'];
		     $netContent=$_POST['netContent'];
		     $classifi=$_POST['classifi'];
		     $unit=$_POST['unit'];
		     $m=M("Goodsinfo");
			$count=$m->execute("update ");
			  
		}
		//删除商品信息
		public function del(){
		     $id=$_GET['id'];
			$m=M("Goodsinfo");
			$count=$m->execute("delete from t_goodsinfo where pk_GoodsInfo_Id=".$id);
			if($count>0){
			    $this->success("数据删除成功！");
			}else{
			    $this->error("数据删除失败!");
			}
		}
		//查询商品信息
		public function search(){
		     $tiaojian=$_POST['tiaojian'];
			$keyword=$_POST['keyword'];
			$m=M("Goodsinfo");
			$data["{$tiaojian}"]=array('like',"%".$keyword."%");
			import("ORG.Util.Page");//导入分页类
		     $count=$m->where($data)->count();//获取数据库中存在的总数
			//$count=$m->query("select count(*) from t_goodsinfo,t_Classifi where ".$tiaojian." like '%".$keyword."%'");
		     $page=new Page($count,5);//实例化分页类 传入总记录数和每页显示的记录数
		     $show=$page->show();//分页显示输出
			$list=$m->query("select * from t_goodsinfo,t_Classifi where ".$tiaojian." like '%".$keyword."%'");
			$this->assign("list",$list);
			$this->assign("show",$show);
			$this->display("index");
		}
	}