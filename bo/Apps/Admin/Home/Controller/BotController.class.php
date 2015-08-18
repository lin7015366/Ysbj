<?php
namespace Home\Controller;
use Think\Controller;
class BotController extends Controller {

    public function index(){
    	$where=array(
    		'del' => 0,
    		);
        $Bot = D('bot');
        $bot = $Bot->page($_GET['p'].',10')->where($where)->order('id desc')->select();
        $this->assign('bot',$bot);// 赋值数据集
        $count      = $Bot->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数
        $show       = $Page->show();// 分页显示输出
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }

    public function addbot(){
    	$this->display();
    }

    public function trach(){
    	$where = array(
    		'del' => 1,
    		);
    	$bot = D('bot')->where($where)->select();
    	$this->assign('bot',$bot);
    	$this->display();
    }

    public function totrach(){
       	$update =array(
       		'id' => (int) $_GET['id'],
       		'del' =>1
       		);
       	if(M('bot')->save($update)){
       		$this->success('OK',U('/Home/Bot'));
       	}else{
       		$this->error('NO');
       	}
    } 

    public function gotrach(){
       	$id = (int) $_GET['id'];
       	if(M('bot')->delete($id)){
       		$this->success('OK',U('/Home/Bot/trach'));
       	}else{
       		$this->error('NO');
       	}
    } 


    public function outtrach(){
       	$update =array(
       		'id' => (int) $_GET['id'],
       		'del' =>0
       		);
       	if(M('bot')->save($update)){
       		$this->success('OK',U('/Home/Bot'));
       	}else{
       		$this->error('NO');
       	}
    } 

    public function updata(){
    	$id = (int) $_GET['id'];//获得当前id
    	$bot = D('bot')->select($id);
    	$this->assign('bot',$bot);
    	$this->display();
    }

    public function savebot(){
        $bot=D('bot');
            if($bot->create()){
                  $upload = new \Think\Upload();// 实例化上传类
                  $upload->maxSize   =     3145728 ;// 设置附件上传大小
                  $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                  $upload->rootPath  =      './Public/Uploads/'; // 设置附件上传根目录
                  // 上传文件 
                  $info   =   $upload->uploadOne($_FILES['pic']);
                   if(!$info) {// 上传错误提示错误信息
                      $this->error($upload->getError());
                   }else{
                      // 上传成功
                      //$this->success('上传成功！');
                      // $bot->pic=$info['savepath'].$info['savename'];
                      // $bot->ut=$_POST['id'];
                      // $bot->ut=$_POST['price'];
                      // $bot->ut=$_POST['content'];
                      $data = array(
		                  'id' => $_POST['id'],
		                  'pic' => $info['savepath'].$info['savename'],
		                  'name' => $_POST['name'],
		                  'price' => $_POST['price'],
                      'newprice' => $_POST['newprice'],
		                  'content' => $_POST['content'],
                      );
                    if(D('bot')->save($data)){
                         $this->success('修改成功',U('/Home/Bot'));
                        }else{
                           $this->error('NO');
                        }
                    }
            }
    }

    public function addtobot(){
        $bot=D('bot');
            if($bot->create()){
                  $upload = new \Think\Upload();// 实例化上传类
                  $upload->maxSize   =     3145728 ;// 设置附件上传大小
                  $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                  $upload->rootPath  =      './Public/Uploads/'; // 设置附件上传根目录
                  // 上传文件 
                  $info   =   $upload->uploadOne($_FILES['pic']);
                   if(!$info) {// 上传错误提示错误信息
                      $this->error($upload->getError());
                   }else{
                      // 上传成功
                      //$this->success('上传成功！');
                      $bot->pic=$info['savepath'].$info['savename'];
                      $bot->price=$_POST['price'];
                      $bot->newprice=$_POST['newprice'];
                      $bot->content=$_POST['content'];
                      $bot->add();
                      $this->success('OK',U('/Home/Bot/addbot'));
                    }
            }
    }


}