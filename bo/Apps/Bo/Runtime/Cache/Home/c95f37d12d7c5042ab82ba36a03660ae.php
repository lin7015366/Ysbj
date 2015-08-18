<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
  <link href="/bo/Public/ss/css/base.css" rel="stylesheet" type="text/css">
  <link href="/bo/Public/ss/css/ssbj-bx.css" rel="stylesheet" type="text/css">
  <title>运水镖局</title>
</head>
<script type="text/javascript">
function selectT(id){
	var dai = document.getElementById('dai');
	var pei = document.getElementById('pei');
	var yi = document.getElementById('yi');
	dai.setAttribute("class", null);
	pei.setAttribute("class", null);
	yi.setAttribute("class", null);
	var sel = document.getElementById(id);
	sel.setAttribute("class", "active");
}
</script>
<body>
  <div class="order_head">
    <ul>
      <li><a class="active" id="dai" onclick="selectT('dai');">待付款</a></li>
      <li><a id="pei" onclick="selectT('pei');">配送中</a></li>
      <li><a id="yi" onclick="selectT('yi');">已完成</a></li>
    </ul>
  </div>
  <div class="order_wrap" style="height: 100px">
    <div class="none">您没有任何订单~</div>
  </div>
</body>
</html>