<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends Controller {

		public function index(){
			$where=array(
	    		'status' => 0,
	    		);
		$Order = D('order'); // 实例化User对象
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $order = $Order->page($_GET['p'].',10')->where($where)->order('id desc')->select();
        $this->assign('order',$order);// 赋值数据集
        $count      = $Order->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数
        $show       = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
		}
		public function seetime(){
			$where=array(
	    		'status' => 0,
	    		);
			$order = D('order')->where($where)->order('id desc')->select();
			$this->assign('order',$order);
			$this->display();
		}
//处理中
		public function iorder(){
			$where=array(
	    		'status' => 1,
	    		);
		$Order = D('order'); // 实例化User对象
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $order = $Order->page($_GET['p'].',10')->where($where)->order('id desc')->select();
        $this->assign('order',$order);// 赋值数据集
        $count      = $Order->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数
        $show       = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
		}
//完成中
		public function sorder(){
			$where=array(
	    		'status' => 2,
	    		);
		$Order = D('order'); // 实例化User对象
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $order = $Order->page($_GET['p'].',10')->where($where)->order('id desc')->select();
        $this->assign('order',$order);// 赋值数据集
        $count      = $Order->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数
        $show       = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
		}
//退订中
		public function corder(){
			$where=array(
	    		'status' => 3,
	    		);
		$Order = D('order'); // 实例化User对象
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $order = $Order->page($_GET['p'].',10')->where($where)->order('id desc')->select();
        $this->assign('order',$order);// 赋值数据集
        $count      = $Order->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数
        $show       = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
		}
//查看完成的订单 用于后期统计数据
		public function allorder(){
				$Order = D('ordermx'); // 实例化User对象
		        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		        $ordermx = $Order->page($_GET['p'].',10')->where($where)->order('id desc')->select();
		        $this->assign('ordermx',$ordermx);// 赋值数据集
		        $count      = $Order->count();// 查询满足要求的总记录数
		        $Page       = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数
		        $show       = $Page->show();// 分页显示输出
		        $this->assign('page',$show);// 赋值分页输出
		        $this->display(); // 输出模板
		}
//查看目前点击的订单
		public function seeorder(){
			//echo $_GET['orderid'];die;
			$where = array(
				'orderid' => (int) $_GET['orderid'],
				);
			$ordermx = D('ordermx')->where($where)->select();
	    	$this->assign('ordermx',$ordermx);
	    	$this->display();
		}
//单个删除转换
		public function delorder(){
			$id = (int) $_GET['orderid'];
	       	if(M('ordermx')->delete($id)){
	       		$this->success('OK',U('/Home/Order/'));
	       	}else{
	       		$this->error('错误(1)mx');
	       	}
		}
//全部删除转换
		public function alldelorder(){
			$where = array(
				'orderid' => (int) $_GET['orderid'],
				);
	       	if(M('ordermx')->where($where)->delete()){
	       		if(M('order')->where($where)->delete()){
	       		$this->success('OK',U('/Home/Order/'));
	       	        }else{
	       	    $this->error('错误(2)all');
	       	        }
	       	}else{
	       		$this->error('错误(1)mx');
	       	}
		}
//处理中转换
		public function toiorder(){
			$update =array(
	       		'id' => (int) $_GET['id'],
	       		'itime' => strtotime(date('Y-m-d H:i:s')),
	       		'status' =>4
       		);
       		if(M('order')->save($update)){
       		        $this->success('OK',U('/Home/Order'));
       	    }else{
       		        $this->error('NO');
       	    }
		}
//完成中转换
		public function tosorder(){
			$update =array(
	       		'id' => (int) $_GET['id'],
	       		'stime' => strtotime(date('Y-m-d H:i:s')),
	       		'status' =>8
       		);
       		if(M('order')->save($update)){
       		        $this->success('OK',U('/Home/Order'));
       	    }else{
       		        $this->error('NO');
       	    }
		}

}
?>