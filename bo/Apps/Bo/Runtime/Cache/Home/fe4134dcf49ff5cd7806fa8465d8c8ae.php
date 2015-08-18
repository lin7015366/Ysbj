<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
  <link rel="stylesheet" type="text/css" href="/bo/Public/ss/css/footer.css">
  <link rel="stylesheet" type="text/css" href="/bo/Public/ss/css/base.css">
  <link rel="stylesheet" type="text/css" href="/bo/Public/ss/css/ssbj-bx.css">
  <title>镖讯</title>
</head>
<script type="text/javascript">
function phone(date){
  window.location.href = 'tel://' + date;
}
</script>
<body>
  <div class="bx_head">
    <img class="logo" src="/bo/Public/ss/images/bx1.png">
    <span class="info">
      <a id="username" href="<?php echo U('/Home/Login');?>">点击登录</a>
      <label id="tip">运水到府健康到家</label>
      <label id="tip">这是你:<?php echo ($data); ?></label>
    </span>
  </div>
  <div class="bx_wrap_order">
    <span><a class="dai" href="<?php echo U('/Home/Order');?>">待付款</a></span>
    <span><a class="pei" href="<?php echo U('/Home/Order');?>">配送中</a></span>
    <span><a class="yi" href="<?php echo U('/Home/Order');?>">已完成</a></span>
  </div>
  <div class="b-split5"></div>
  <div class="bx_wrap_cont">
    <ul>
      <li><a href="<?php echo U('/Home/Address');?>"><img src="/bo/Public/ss/images/bx-address.png">常用地址<em class="row-right"></em></a></li>
      <li><a href="#"><img src="/bo/Public/ss/images/bx-money.png">我的余额：0.0元</a></li>
      <li><a href="<?php echo U('/Home/More');?>"><img src="/bo/Public/ss/images/bx-setting.png">更多<em class="row-right"></em></a></li>
      <li><a class="kefu" href="javascript:phone('400-400-400')">客服 400-400-400</a></li>
    </ul>
  </div>
<!-- 页脚导航-->
<footer>
  <div class="bottomBox">
    <div class="indexMsg">
      <div class="indexMenu">
        <a href="<?php echo U('/Home');?>"><span class=" home-index-active">首页</span></a>
        <a href="<?php echo U('/Home/Car');?>"><span class=" Order-index">下令</span></a>
        <a href="<?php echo U('/Home/Biaoxun');?>"><span class="card-index">镖讯</span></a>
      </div>
    </div>
  </div>
</footer>
</body>
</html>