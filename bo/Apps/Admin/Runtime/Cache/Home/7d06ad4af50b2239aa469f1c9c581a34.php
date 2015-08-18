<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title>login</title>
</head>
 <body>
  <form action="<?php echo U('/Home/Login/login');?>" id="login_form" method="post">
		<label >账号</label> 
			<input name="name" type="text"  id="name" />
		<label >密码</label> 
			<input id="password"  name="password" type="password" >			　　
		<button type="submit" id="submit">登录</button>			
  </form>				
 </body>
</html>