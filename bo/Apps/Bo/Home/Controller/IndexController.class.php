<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {


    public function index(){
    	$data=session('name');
        if($data){
            $this->data = $data;
        }else{
        	$this->redirect('/Home/Login');
        }
        $this->assign('data',$data);
    	$this->display();
    }

}