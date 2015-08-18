<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {


    public function index(){
        $User = M('User'); // 实例化User对象
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $user = $User->page($_GET['p'].',10')->order('id desc')->select();
        $this->assign('user',$user);// 赋值数据集
        $count      = $User->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数
        $show       = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }

    public function adduser(){
    	$this->display();
    }
//查看用户
    public function updata(){
    	$id = (int) $_GET['id'];//获得当前id
    	$user = D('user')->select($id);
    	$this->assign('user',$user);
    	$this->display();
    }
//查看地址
    public function addupdata(){
        $addressid = (int) $_GET['addressid'];//获得当前id
        if($addressid==0){
            $address = D('addressmx')->select();
            $this->assign('address',$address);
            $this->display();
        }else{
        $data =array(
            'addressid' =>(int) $_GET['addressid'],
            );

        $User = D('addressmx'); // 实例化User对象
        // 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
        $address = $User->page($_GET['p'].',10')->where($data)->order('id desc')->select();
        $this->assign('address',$address);// 赋值数据集
        $count      = $User->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数
        $show       = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
        }
    }
//添加地址查看 
    public function addressupdata(){
        $addressid = (int) $_GET['addressid'];
        $address = D('addressmx')->select($addressid);
        $this->assign('address',$address);
        $this->display();
    }
//添加地址操作 
    public function addtoadd(){
            $address = D('addressmx');
            $address->addressid = $_POST['addressid'];
            $address->address = $_POST['address'];
            $address->add();
            $this->success('添加成功',U('/Home/User/addupdata'));
    }
//修改地址查看
    public function addtoupdata(){
        $id = (int) $_GET['id'];
        $address = D('addressmx')->select($id);
        $this->assign('address',$address);
        $this->display();
    }
//修改地址操作
    public function addtodata(){
        $data = array(
          'id' => $_POST['id'],
          'addressid' => $_POST['addressid'],
          'address' => $_POST['address'],
           );
          if(D('addressmx')->save($data)){
             $this->success('修改成功',U('/Home/User/addupdata'));
        }else{
           $this->error('NO');
        }
    }
//删除用户
    public function gotrach(){
       	$id = (int) $_GET['id'];
       	if(M('user')->delete($id)){
       		$this->success('OK',U('/Home/User'));
       	}else{
       		$this->error('NO');
       	}
    }
//删除地址
    public function addressgotrach(){
        $id = (int) $_GET['id'];
        if(M('addressmx')->delete($id)){
            $this->success('OK',U('/Home/User/addupdata'));
        }else{
            $this->error('NO');
        }
    }
//添加用户
    public function addtouser(){
    	$user = D('user');
        $condition = array(
           'userid' => $_POST['tel'],
                          );
        $user=M('user')->where($condition)->find();
        if($user){
            $this->error('已经有此用户');
        }else{
            $user = D('user');
            $user->userid = $_POST['tel'];
            $user->tel = $_POST['tel'];
            $user->name = $_POST['name'];
            $user->add();
        }
        $where = array(
            'userid' => $_POST['tel'],
            );
        $data = $user->where($where)->getField('id');//获取id
        $list = array(
          'id' => $data,
          'addressid' => $data,
            );
        D('user')->save($list);
		$this->success('用户添加成功',U('/Home/User/adduser'));
    }
//修改用户
    public function saveuser(){
    	$user = D('user');
        $data = array(
		  'id' => $_POST['id'],
		  'name' => $_POST['name'],
		  'tel' => $_POST['tel'],
		  'addressid' => $_POST['id'],
		);
        if(D('user')->save($data)){
	         $this->success('修改成功',U('/Home/User'));
	    }else{
	       $this->error('NO');
	    }
    }


}