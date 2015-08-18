<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
  <link href="/bo/Public/ss/css/base.css" rel="stylesheet" type="text/css">
  <link href="/bo/Public/ss/css/ssbj-bx.css" rel="stylesheet" type="text/css">
  <title>运水镖局</title>
  <style type="text/css">
    body{background: #fff;}
  </style>
</head>
<body>
  <div class="login_top"></div>
  <form action="<?php echo U('/Home/Login/login');?>" method="post">
    <div class="ptext">
      <span class="icon user"></span>
      <input type="text" name="name"  id="name" id="phoneNumber" required="required" required-msg="请输入手机号码" data-type="phone" maxlength="11" placeholder="请输入手机号码">
    </div>
    <div class="ptext">
      <span class="icon pass"></span>
      <input type="text" id="password"  name="password" id="phoneNumber" required="required" required-msg="请输入密码" data-type="phone" maxlength="11" placeholder="请输入密码">
    </div>
    <div class="login-btn">
      <input type="submit" value="登录">
      <a href="register.jsp">注册账号</a>
      <a style="float: right;" href="#">忘记密码?</a>
    </div>
  </form>
</body>
</html>