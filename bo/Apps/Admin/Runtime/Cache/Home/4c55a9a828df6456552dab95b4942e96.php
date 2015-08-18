<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="no-js">

<head>

<meta charset="utf-8">
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- CSS -->

<link rel="stylesheet" href="/bo/Public/Admin/css/supersized.css">
<link rel="stylesheet" href="/bo/Public/Admin/css/login.css">
<link href="/bo/Public/Admin/css/bootstrap.min.css" rel="stylesheet">
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
<![endif]-->
<script src="/bo/Public/Admin/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="/bo/Public/Admin/js/jquery.form.js"></script>
<script type="text/javascript" src="/bo/Public/Admin/js/tooltips.js"></script>
<script type="text/javascript" src="/bo/Public/Admin/js/login.js"></script>
</head>
<body>
<div class="page-container">
	<div class="main_box">
		<div class="login_box">
			<div class="login_logo">
				<img src="/bo/Public/Admin/images/logo.png" >
			</div>
		
			<div class="login_form">
				<form action="<?php echo U('/Home/Login/login');?>" id="login_form" method="post">
					<div class="form-group">
						<label for="j_username" class="t">账&nbsp;&nbsp;&nbsp;&nbsp;号：</label> 
						 <input name="name" type="text" class="form-control x319 in"  id="name"  autocomplete="off"/>
					</div>
					<div class="form-group">
						<label for="j_password" class="t">密　码：</label> 
						<input id="password" value="" name="password" type="password" 
						class="password form-control x319 in">
					</div>
					<div class="form-group">
						<label class="t"></label>
						<label for="j_remember" class="m">
						<input id="j_remember" type="checkbox" value="true">&nbsp;记住登陆账号!</label>
					</div>
					<div class="form-group space">
						<label class="t"></label>　　　
						<button type="submit"  id="submit" 
						class="btn btn-primary btn-lg">&nbsp;登&nbsp;录&nbsp;</button>
						<input type="reset" value="&nbsp;重&nbsp;置&nbsp;" class="btn btn-default btn-lg">
					</div>
				</form>
			</div>
	</div>
</div>

<!-- Javascript -->

<script src="/bo/Public/Admin/js/supersized.3.2.7.min.js"></script>
<script src="/bo/Public/Admin/js/supersized-init.js"></script>
<script src="/bo/Public/Admin/js/scripts.js"></script>
</body>
</html>