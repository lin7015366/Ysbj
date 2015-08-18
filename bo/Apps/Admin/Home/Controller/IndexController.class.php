<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {


    public function index(){

    	//判断登入
    	$data=session('name');
        if($data){
            $this->data = $data;
        }else{
        	$this->redirect('/Home/Login');
        }


        $User = M('User'); // 实例化User对象
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $list = $User->page($_GET['p'].',2')->select();
        $this->assign('list',$list);// 赋值数据集
        $count      = $User->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数
        $show       = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板



        // $user = D('user')->order('id desc')->select();
    	// $this->assign('user',$user);
    	// $this->display();
    }

}