<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {


    public function index(){
    	$this->display();
    }
    public function login(){
        $name=I('post.name');
        $password=I('post.password','','md5');
        $condition = array(
           'name' => $name,
           'password'=> $password
                          );
        $user=M('user')->where($condition)->find();
        if($user){
                $uid=$user[id];
                if($user[name]){
                   $name=$user[name];
                }
                   session('uid',$user[id]);
                   session('name',$name);
                   redirect(__APP__);
        }else{
        	$this->error('nono');
        }
    }

    public function logout(){
        session('uid',null);
        session('name',null);
        redirect(__APP__);
    }

}