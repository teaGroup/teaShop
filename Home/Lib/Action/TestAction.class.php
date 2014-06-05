<?php
class TestAction extends Action{
	public function index(){
		    //获取more页面显示的是何种商品
			header("Content-type:text/html;charset=utf-8");
		    $name="chaju";
		    $m=M("Goodsview");
		    import("ORG.Util.Page");
		    switch($name){
		          case 'green':
			         //查找出所有是绿茶的商品
				    $arr_c=$m->query("select count(*) from t_Goodsview where Classifi_Name in (select Classifi_Name from t_Classifi where fk_Classifi_ParentId=1 or fk_Classifi_ParentId in (select pk_Classifi_Id from t_Classifi where fk_Classifi_ParentId='1') or pk_Classifi_Id=1)");
				    $count=$arr_c[0]['count(*)'];
				    $page=new Page($count,15);//实例化分页类 传入总记录数和每页显示的记录数
		              $show=$page->show();//分页显示输出
				    $data=$m->query("select * from t_Goodsview where Classifi_Name in (select Classifi_Name from t_Classifi where fk_Classifi_ParentId=1 or fk_Classifi_ParentId in (select pk_Classifi_Id from t_Classifi where fk_Classifi_ParentId='1') or pk_Classifi_Id=1) order by Goods_SellTime desc limit {$page->firstRow},{$page->listRows}");
		             echo $count;
		             dump($data);
		             exit();
				break;
			     case 'red':
				    //查找出所有是红茶的商品
				    $arr_c=$m->query("select count(*) from t_Goodsview where Classifi_Name in (select Classifi_Name from t_Classifi where fk_Classifi_ParentId=2 or fk_Classifi_ParentId in (select pk_Classifi_Id from t_Classifi where fk_Classifi_ParentId='2') or pk_Classifi_Id=2)");
				    $count=$arr_c[0]['count(*)'];
				    $page=new Page($count,15);//实例化分页类 传入总记录数和每页显示的记录数
		              $show=$page->show();//分页显示输出
				    $data=$m->query("select * from t_Goodsview where Classifi_Name in (select Classifi_Name from t_Classifi where fk_Classifi_ParentId=2 or fk_Classifi_ParentId in (select pk_Classifi_Id from t_Classifi where fk_Classifi_ParentId='2') or pk_Classifi_Id=2) order by Goods_SellTime desc limit {$page->firstRow},{$page->listRows}");
		             echo $count;
		             dump($data);
		             exit();
				break;
			     case 'white':
				    //查找出所有是白茶的商品
				    $arr_c=$m->query("select count(*) from t_Goodsview where Classifi_Name in (select Classifi_Name from t_Classifi where fk_Classifi_ParentId=6 or fk_Classifi_ParentId in (select pk_Classifi_Id from t_Classifi where fk_Classifi_ParentId='6') or pk_Classifi_Id=6)");
				    $count=$arr_c[0]['count(*)'];
				    $page=new Page($count,15);//实例化分页类 传入总记录数和每页显示的记录数
		              $show=$page->show();//分页显示输出
				    $data=$m->query("select * from t_Goodsview where Classifi_Name in (select Classifi_Name from t_Classifi where fk_Classifi_ParentId=6 or fk_Classifi_ParentId in (select pk_Classifi_Id from t_Classifi where fk_Classifi_ParentId='6') or pk_Classifi_Id=6) order by Goods_SellTime desc limit {$page->firstRow},{$page->listRows}");
		             echo $count;
		             dump($data);
		             exit();
				break;
				case 'black':
				    //查找出所有是黑茶的商品
				    $arr_c=$m->query("select count(*) from t_Goodsview where Classifi_Name in (select Classifi_Name from t_Classifi where fk_Classifi_ParentId=4 or fk_Classifi_ParentId in (select pk_Classifi_Id from t_Classifi where fk_Classifi_ParentId='4') or pk_Classifi_Id=4)");
				    $count=$arr_c[0]['count(*)'];
				    $page=new Page($count,15);//实例化分页类 传入总记录数和每页显示的记录数
		              $show=$page->show();//分页显示输出
				    $data=$m->query("select * from t_Goodsview where Classifi_Name in (select Classifi_Name from t_Classifi where fk_Classifi_ParentId=4 or fk_Classifi_ParentId in (select pk_Classifi_Id from t_Classifi where fk_Classifi_ParentId='4') or pk_Classifi_Id=4) order by Goods_SellTime desc limit {$page->firstRow},{$page->listRows}");
		              echo $count;
		             dump($data);
		             exit();
				break;
			     case 'wulong':
				    //查找出所有是乌龙茶的商品
				    $arr_c=$m->query("select count(*) from t_Goodsview where Classifi_Name in (select Classifi_Name from t_Classifi where fk_Classifi_ParentId=3 or fk_Classifi_ParentId in (select pk_Classifi_Id from t_Classifi where fk_Classifi_ParentId='3') or pk_Classifi_Id=3)");
				    $count=$arr_c[0]['count(*)'];
				    $page=new Page($count,15);//实例化分页类 传入总记录数和每页显示的记录数
		              $show=$page->show();//分页显示输出
				    $data=$m->query("select * from t_Goodsview where Classifi_Name in (select Classifi_Name from t_Classifi where fk_Classifi_ParentId=3 or fk_Classifi_ParentId in (select pk_Classifi_Id from t_Classifi where fk_Classifi_ParentId='3') or pk_Classifi_Id=3) order by Goods_SellTime desc limit {$page->firstRow},{$page->listRows}");
		              echo $count;
		             dump($data);
		             exit();
				break;
				case 'flower':
				     //查找出所有是花茶的商品
				    $arr_c=$m->query("select count(*) from t_Goodsview where Classifi_Name in (select Classifi_Name from t_Classifi where fk_Classifi_ParentId=5 or fk_Classifi_ParentId in (select pk_Classifi_Id from t_Classifi where fk_Classifi_ParentId='5') or pk_Classifi_Id=5)");
				    $count=$arr_c[0]['count(*)'];
				    $page=new Page($count,15);//实例化分页类 传入总记录数和每页显示的记录数
		              $show=$page->show();//分页显示输出
				    $data=$m->query("select * from t_Goodsview where Classifi_Name in (select Classifi_Name from t_Classifi where fk_Classifi_ParentId=5 or fk_Classifi_ParentId in (select pk_Classifi_Id from t_Classifi where fk_Classifi_ParentId='5') or pk_Classifi_Id=5) order by Goods_SellTime desc limit {$page->firstRow},{$page->listRows}");
		             echo $count;
		             dump($data);
		             exit();
				break;
				case 'chaju':
				    //查找出所有是茶具的商品
				    $arr_c=$m->query("select count(*) from t_Goodsview where Classifi_Name in (select Classifi_Name from t_Classifi where fk_Classifi_ParentId=7 or fk_Classifi_ParentId in (select pk_Classifi_Id from t_Classifi where fk_Classifi_ParentId='7') or pk_Classifi_Id=7)");
				    $count=$arr_c[0]['count(*)'];
				    $page=new Page($count,15);//实例化分页类 传入总记录数和每页显示的记录数
		              $show=$page->show();//分页显示输出
				    $data=$m->query("select * from t_Goodsview where Classifi_Name in (select Classifi_Name from t_Classifi where fk_Classifi_ParentId=7 or fk_Classifi_ParentId in (select pk_Classifi_Id from t_Classifi where fk_Classifi_ParentId='7') or pk_Classifi_Id=7) order by Goods_SellTime desc limit {$page->firstRow},{$page->listRows}");
		             echo $count;
		             dump($data);
		             exit();
				break;
		     }
		}

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
}
?>