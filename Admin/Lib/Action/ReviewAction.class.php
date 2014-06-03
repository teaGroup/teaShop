<?php
     class ReviewAction extends CommonAction{
	      public function index(){
		     $m=M('Rerpview');
			import("ORG.Util.Page");//导入分页类
			//$arr_list=$m->query("select count(*) from t_Review join t_Goodsinfo on t_Review.fk_Goods_Review_Id = t_Goodsinfo.pk_Goodsinfo_Id");
			//$count=$arr_list[0]['count(*)'];
			$count=$m->count();
			$page=new Page($count,5);//实例化分页类 传入总记录数和每页显示的记录数
		     $show=$page->show();//分页显示输出
			//$list=$m->query("select pk_Review_Id,Goods_Name,Goods_img,Revi_Content,Revi_People,Revi_Time from t_Review join t_Goodsinfo on t_Review.fk_Goods_Review_Id = t_Goodsinfo.pk_Goodsinfo_Id order by Revi_Time desc limit {$page->firstRow},{$page->listRows}");
			$list=$m->limit($page->firstRow.','.$page->listRows)->order('Revi_Time desc')->select();
			
			//$model=M("Replyre");
			//$data['fk_Review_ReplyRe_Id']=$list[0]['pk_Review_Id'];
			//$rep_list=$model->where($data)->select();
			$this->assign("list",$list);
			$this->assign("show",$show);
			//$this->assign("rep_list",$rep_list);
			$this->display();
		 }
		 public function reply(){
		     //获取评论ID号
			$rev_id=$_GET['id'];
			$m=M("Review");
			$list=$m->query("select pk_Review_Id,Goods_Name,Goods_img,Revi_Content,Revi_People,Revi_Time from t_Review , t_Goodsinfo where t_Review.fk_Goods_Review_Id = t_Goodsinfo.pk_Goodsinfo_Id and pk_Review_Id={$rev_id}");
			$this->assign("list",$list);
			$this->assign("id",$rev_id);
			$this->display();
		 }
		 //将回复的内容插入到数据库中
		 public function insert_rep(){
		     //获取评论ID号
			$rev_id=$_GET['id'];
			$str=$_POST['editor1'];
			if(!empty($str)){
			      $str=preg_replace("/(\!.*?)>/si",'',$str); //过滤DOCTYPE
				 $str=preg_replace("/(\/?html.*?)>/si",'',$str); //过滤html标签
				 $str=preg_replace("/(\/?head.*?)>/si",'',$str); //过滤head标签
				 $str=preg_replace("/(\/?meta.*?)>/si",'',$str); //过滤meta标签
				 $intro=preg_replace("/(\/?body.*?)>/si",'',$str); //过滤body标签
				 
               }
			$time=date('Y-m-d H');
			$m=M("Replyre");
			$count=$m->execute("insert into t_Replyre(pk_ReplyRe_Id,fk_Review_ReplyRe_Id,ReplyRe_Content,ReplyRe_Time)values(null,{$rev_id},'".$intro."','".$time."')");
			if($count>0){
			     $this->success("回复成功！");
			}else{
			     $this->error("回复失败！");
			}
		 }
	}