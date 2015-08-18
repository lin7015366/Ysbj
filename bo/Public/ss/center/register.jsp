<%@ page language="java" contentType="text/html; charset=utf-8"
	pageEncoding="utf-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
  <link href="../css/base.css" rel="stylesheet" type="text/css">
  <link href="../css/ssbj-bx.css" rel="stylesheet" type="text/css">
  <title>运水镖局</title>
  <style type="text/css">
    body{background: #33CC99;}
  </style>
</head>
<body>
  <div class="reg_wrap">
    <form action="" method="post">
      <table>
        <tr>
          <td width="65%">
            <input name="tel" id="tel" type="text" placeholder="请输入手机号" value="">
          </td>
          <td>
            <input id="code" type="button" value="获取验证码" onclick="">
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <input id="code_text" name="code" type="text" placeholder="请输入验证码" value="">
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <input id="pass" name="pass" type="text" placeholder="请输入密码" value="">
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <input id="submit" type="submit" value="立即注册">
          </td>
        </tr>
        <tr>
          <td>
            <input id="submit" type="checkbox" checked="checked" value="1">我已同意<a 
              href="#" style="color: blue;text-decoration: underline;">用户协议</a>
          </td>
          <td style="text-align: right;">
            <a href="login.jsp" style="color: blue;text-decoration: underline;">立即登录</a>
          </td>
        </tr>
      </table>
    </form>
  </div>
</body>
</html>