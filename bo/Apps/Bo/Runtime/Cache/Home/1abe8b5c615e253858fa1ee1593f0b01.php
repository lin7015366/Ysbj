<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
  <link href="/bo/Public/ss/css/base.css" rel="stylesheet" type="text/css">
  <link href="/bo/Public/ss/css/ssbj-bx.css" rel="stylesheet" type="text/css">
  <title>运水镖局</title>
</head>
<body>
  <div class="addr_wrap">
    <ul>
      <li>
        <label id="name" style="width: 60px;">姓名:<?php echo ($userid); ?></label>
        <label id="tel" style="width: 60px;">电话:<?php echo ($data); ?></label><br>
      </li>
      <?php if(is_array($data2)): foreach($data2 as $key=>$v): ?><li>  
        <label id="city">地址:<?php echo ($v["address"]); ?></label>
        <em class="row-right2"></em>
      </li><?php endforeach; endif; ?>
    </ul>
  </div>
  <div class="addr_foot">
    <img alt="add" src="/bo/Public/ss/images/add.png">
    <a href="#">添加地址</a>
  </div>
</body>
</html>