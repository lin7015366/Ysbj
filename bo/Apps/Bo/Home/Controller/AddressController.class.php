<?php
namespace Home\Controller;
use Think\Controller;
class AddressController extends Controller {

    public function index(){
      $userid=session('name');
      $user = M('user');
      $address = M('addressmx');
      $where = array(
            'name' => $userid,
            );
      $data = $user->where($where)->getField('tel');
    // ["id"] => string(1) "1"
    // ["name"] => string(1) "1"
    // ["tel"] => string(9) "123456789"
      $where2 = array(
            'addressid' => $userid,
            );
      $data2 = $address->where($where2)->select();
      $this->assign('userid',$userid);
      $this->assign('data',$data);
      $this->assign('data2',$data2);
      $this->display();
    }

}