<?php 
namespace Home\Controller;
use Think\Controller;
class BillingController extends Controller {

		public function index(){
                  $where=array(
                        'del' => 0,
                        );
                  $billing = D('billing')->where($where)->select();
                  $this->assign('billing',$billing);
                  $this->display();
		}

            public function gotrach(){
                  $id = (int) $_GET['id'];
                  if(M('billing')->delete($id)){
                        $this->success('OK',U('/Home/Billing'));
                  }else{
                        $this->error('NO');
                  }
            } 

		public function addbilling(){
			$this->display();
		}		

		public function addtobilling(){
			$billing = D('billing');
				if($billing->create()){
                  $upload = new \Think\Upload();// 实例化上传类
                  $upload->maxSize   =     3145728 ;// 设置附件上传大小
                  $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                  $upload->rootPath  =      './Public/Uploads/'; // 设置附件上传根目录
                  // 上传文件 
                  $info   =   $upload->uploadOne($_FILES['pic']);
                   if(!$info) {// 上传错误提示错误信息
                      $this->error($upload->getError());
                   }else{
                   		$billing->pic=$info['savepath'].$info['savename'];
                   		$billing->url=$_POST['url'];
                   		$billing->add();
                   		$this->success('OK',U('/Home/Billing/addbilling'));
				    }
		        }
	    }






}
 ?>