<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
  <link href="/bo/Public/ss/css/base.css" rel="stylesheet" type="text/css">
  <link href="/bo/Public/ss/css/ssbj-bx.css" rel="stylesheet" type="text/css">
  <title>运水镖局</title>
</head>
<script type="text/javascript">
function phone(date){
	window.location.href = 'tel://' + date;
}
</script>
<body>
  <div class="more_wrap">
    <ul>
      <li>
        <img src="/bo/Public/ss/images/bx-setting.png">
        <a href="<?php echo U('/Home/Cjwt');?>">常见问题</a>
        <em class="row-right3"></em>
      </li>
      <li>
      	<img src="/bo/Public/ss/images/bx-setting.png">
        <a href="<?php echo U('/Home/Xdxz');?>">下单须知</a>
        <em class="row-right3"></em>
      </li>
      <li>
        <img src="/bo/Public/ss/images/bx-setting.png">
        <a href="javascript:phone('400-400-400')">服务热线<b style="padding-left: 5px;">4000-400-400</b></a>
      </li>
      <li>
        <img src="/bo/Public/ss/images/bx-setting.png">
        <a href="#">用户协议</a>
        <em class="row-right3"></em>
      </li>
    </ul>
  </div>
</body>
</html>