<?php
namespace Home\Controller;
use Think\Controller;
class BiaoxunController extends Controller {


    public function index(){
      $data=session('name');
      $this->assign('data',$data);
      $this->display();
    }

}