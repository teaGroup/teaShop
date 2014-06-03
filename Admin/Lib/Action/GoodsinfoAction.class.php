<?php
     class GoodsinfoAction extends CommonAction{
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
		     $sell=$_POST['sell'];
		     $num=$_POST['num'];
		     $sellTime=date('Y-m-d H:i:s');
		     $price=$_POST['price'];
		     $rewardCred=$_POST['rewardCred'];
			$str=$_POST['editor1'];
			if(!empty($str)){
			      $str=preg_replace("/(\!.*?)>/si",'',$str); //过滤DOCTYPE
				 $str=preg_replace("/(\/?html.*?)>/si",'',$str); //过滤html标签
				 $str=preg_replace("/(\/?head.*?)>/si",'',$str); //过滤head标签
				 $str=preg_replace("/(\/?meta.*?)>/si",'',$str); //过滤meta标签
				 $intro=preg_replace("/(\/?body.*?)>/si",'',$str); //过滤body标签
				 
               }
		     $netContent=$_POST['netContent'];
		     $classifi=$_POST['classifi'];
		     $unit=$_POST['unit'];
			$model=M("Goodsinfo");
			if(!empty($classifi)){
			    $m=M("Classifi");
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
				$model->Goods_img1='__ROOT__/Uploads/'.$info[1]['savename'];
				$model->Goods_img2='__ROOT__/Uploads/'.$info[2]['savename'];
				$model->Goods_img3='__ROOT__/Uploads/'.$info[3]['savename'];
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
		    $m=M('Goodsview');
		    import("ORG.Util.Page");//导入分页类
		    $count=$m->count();//获取数据库中存在的总数
		    $page=new Page($count,15);//实例化分页类 传入总记录数和每页显示的记录数
		    $show=$page->show();//分页显示输出
		    $list=$m->limit($page->firstRow.','.$page->listRows)->order('Goods_SellTime desc')->select();
		   $this->assign("list",$list);
		   $this->assign("show",$show);
		    $this->display();
		}
		//修改商品信息跳转的页面
		public function modify(){
		       $id=$_GET['id'];
		       $m=M("Goodsview");
			  $arr['pk_Goodsinfo_Id']=$id;
			  $data=$m->where($arr)->find();
			  $this->assign("data",$data);
			  $this->display();
		}
		//将修改表单中的数据在数据库中进行修改
		public function update(){
		     $id=$_POST['id'];
		     $name=$_POST['name'];
		     $sell=$_POST['sell'];
		     $num=$_POST['num'];
		     $price=$_POST['price'];
		     $rewardCred=$_POST['rewardCred'];
		     $str=$_POST['editor1'];
			if(!empty($str)){
			      $str=preg_replace("/(\!.*?)>/si",'',$str); //过滤DOCTYPE
				 $str=preg_replace("/(\/?html.*?)>/si",'',$str); //过滤html标签
				 $str=preg_replace("/(\/?head.*?)>/si",'',$str); //过滤head标签
				 $str=preg_replace("/(\/?meta.*?)>/si",'',$str); //过滤meta标签
				 $intro=preg_replace("/(\/?body.*?)>/si",'',$str); //过滤body标签	 
               }
		     $netContent=$_POST['netContent'];
		     $classifi=$_POST['classifi'];
		     $unit=$_POST['unit'];
		     $m=M("Goodsinfo");
			if(!empty($name)){
			    $data['Goods_Name']=$name;
			}
			if(!empty($price)){
			    $data['Goods_Price']=$price;
			}
			if(!empty($classifi)){
			    $model=M("Classifi");
			    $class['Classifi_Name']=$classifi;
			    $arr=$model->where($class)->select();
			    $data['fk_Classifi_Goods_Id']=$arr[0]['pk_Classifi_Id'];
			}
			if(!empty($sell)){
			    $data['Goods_IsSell']=$sell;
			}
			if(!empty($num)){
			    $data['Goods_Num']=$num;
			}
			if(!empty($rewardCred)){
			    $data['Goods_RewardCred']=$rewardCred;
			}
			if(!empty($netContent)){
			    $data['Goods_NetContent']=$netContent;
			}
			if(!empty($unit)){
			    $data['Goods_Unit']=$unit;
			}
			    $data['Goods_Intro']=$intro;
			$count=$m->where('pk_GoodsInfo_Id='.$id)->save($data);
			if($count>0){
			    $this->success("商品信息更新成功！","index");
			}else{
			    $this->error("商品信息更新失败！");
			}
			  
		}
		//删除商品信息
		public function del(){
		     $id=$_GET['id'];
			$m=M("Goodsinfo");
			//$count=$m->execute("delete from t_goodsinfo where pk_GoodsInfo_Id=".$id);
			//$count=$m->where('pk_GoodsInfo_Id='.$id)->delete();
			$arr['pk_GoodsInfo_Id']=$id;
			$count=$m->where($arr)->delete();
			if($count>0){
			    $this->success("数据删除成功！");
			}else{
			    $this->error("数据删除失败!");
			}
		}
		//查询商品信息
		public function search(){
		     $tiaojian=$_GET['tiaojian'];
			$keyword=$_GET['keyword'];
			$m=M("Goodsview");
			$data["{$tiaojian}"]=array('like',"%".$keyword."%");
			import("ORG.Util.Page");//导入分页类
		     $count=$m->where($data)->count();//获取数据库中存在的总数
			//$count=$m->query("select count(*) from t_goodsinfo,t_Classifi where ".$tiaojian." like '%".$keyword."%'");
		     $page=new Page($count,5);//实例化分页类 传入总记录数和每页显示的记录数
		     $show=$page->show();//分页显示输出
			$list=$m->query("select * from t_goodsview where ".$tiaojian." like '%".$keyword."%' limit {$page->firstRow},{$page->listRows}");
			$this->assign("list",$list);
			$this->assign("show",$show);
			$this->display("index");
		}
	}