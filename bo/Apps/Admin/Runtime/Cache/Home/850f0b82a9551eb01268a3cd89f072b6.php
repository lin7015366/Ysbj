<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>订单信息</title>
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="/bo/Public/Admin/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="/bo/Public/Admin/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="/bo/Public/Admin/css/amazeui.min.css"/>
  <link rel="stylesheet" href="/bo/Public/Admin/css/admin.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar admin-header">
  <div class="am-topbar-brand">
    <strong>Bottled</strong>
  </div>
  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
      <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 订单 <span class="am-badge am-badge-warning"><?php echo ($num); ?></span></a></li>
      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users"></span> admin <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li><a href="<?php echo U('/Home/Login/index');?>"><span class="am-icon-power-off"></span> 退出</a></li>
        </ul>
      </li>
      <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
    </ul>
  </div>
</header>

<div class="am-cf admin-main">

  <!-- sidebar start -->
  <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
      <ul class="am-list admin-sidebar-list">
        <li><a href="<?php echo U('/Home/Index/index/p/1');?>"><span class="am-icon-home"></span> 首页</a></li>


        <li class="admin-parent">
         <a class="am-cf" data-am-collapse="{target: '#User-nav'}"><span class="am-icon-file"></span> User <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        <ul class="am-list am-User admin-sidebar-sub am-in" id="User-nav">
         <li><a href="<?php echo U('/Home/User/index/p/1');?>" class="am-cf"><span class="am-icon-check"></span>用户信息<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
          <li><a href="<?php echo U('/Home/User/adduser');?>" class="am-cf"><span class="am-icon-check"></span> 添加用户<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
          <li><a href="<?php echo U('/Home/User/addupdata');?>" class="am-cf"><span class="am-icon-check"></span> 地址信息<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
        </ul></li>


        <li class="admin-parent">
         <a class="am-cf" data-am-collapse="{target: '#Bot-nav'}"><span class="am-icon-file"></span> Bot <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        <ul class="am-list am-Bot admin-sidebar-sub am-in" id="Bot-nav">
         <li><a href="<?php echo U('/Home/Bot/index/p/1');?>" class="am-cf"><span class="am-icon-check"></span> 产品信息<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
          <li><a href="<?php echo U('/Home/Bot/addbot');?>" class="am-cf"><span class="am-icon-check"></span> 添加产品<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
        <li><a href="<?php echo U('/Home/Bot/trach');?>" class="am-cf"><span class="am-icon-check"></span> 回车站<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
        </ul></li>


         <li class="admin-parent">
         <a class="am-cf" data-am-collapse="{target: '#Order-nav'}"><span class="am-icon-file"></span> Order <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        <ul class="am-list am-Order admin-sidebar-sub am-in" id="Order-nav">
         <li><a href="<?php echo U('/Home/Order/index/p/1');?>" class="am-cf"><span class="am-icon-check"></span> 订单信息(未处理)<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
          <li><a href="<?php echo U('/Home/Order/iorder');?>" class="am-cf"><span class="am-icon-check"></span> 处理中订单<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
        <li><a href="<?php echo U('/Home/Order/sorder');?>" class="am-cf"><span class="am-icon-check"></span> 订单完成<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
          <li><a href="<?php echo U('/Home/Order/corder');?>" class="am-cf"><span class="am-icon-check"></span> 退订<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
          <li><a href="<?php echo U('/Home/Order/allorder');?>" class="am-cf"><span class="am-icon-check"></span> 查看完成订单<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
        </ul></li>


        <li class="admin-parent">
         <a class="am-cf" data-am-collapse="{target: '#Billing-nav'}"><span class="am-icon-file"></span> Billing <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        <ul class="am-list am-Billing admin-sidebar-sub am-in" id="Billing-nav">
         <li><a href="<?php echo U('/Home/Billing/index/p/1');?>" class="am-cf"><span class="am-icon-check"></span> 广告信息<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
          <li><a href="<?php echo U('/Home/Billing/addbilling');?>" class="am-cf"><span class="am-icon-check"></span> 添加广告<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
        </ul></li>


        <li><a href="<?php echo U('/Home/Login/logout');?>"><span class="am-icon-sign-out"></span> 注销</a></li>
      </ul>
      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-tag"></span> weih</p>
          <p>未知</p>
        </div>
      </div>
    </div>
  </div>
  <!-- sidebar end -->

  <!-- content start -->
  <div class="admin-content">

    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">订单信息</strong></div>
    </div>


    <div class="am-g">
      <div class="am-u-sm-12">
        <table class="am-table am-table-bd am-table-striped admin-content-table">
          <thead>
            <tr>
              <th>ID</th><th>订单Id</th><th>电话</th><th>下单时间</th><th>操作</th>
            </tr>
          </thead>
            <tbody>
            <tr>
      <?php if(is_array($order)): foreach($order as $key=>$v): ?><td><?php echo ($v["id"]); ?></td>
              <td><?php echo ($v["orderid"]); ?></td>
              <td><?php echo ($v["tel"]); ?></td>
              <td><?php echo (date('Y-m-d H:i:s',$v["htime"])); ?></td>
              <td>
              <div class="am-dropdown" data-am-dropdown>
                  <button class="am-btn am-btn-default am-btn-xs am-dropdown-toggle" data-am-dropdown-toggle><span class="am-icon-cog"></span> <span class="am-icon-caret-down"></span></button>
                 <ul class="am-dropdown-content">
                   <li>
                       <a href="<?php echo U('/Home/Order/seeorder', array('orderid' => $v['orderid']));?>">1. 查看</a>
                    </li>
                    <li>
                       <a href="<?php echo U('/Home/Order/seetime');?>">2. 按时间排序</a>
                    </li>
                 </ul>
              </div>
              </td>
            </tr><?php endforeach; endif; ?>
            </tr>
          </tbody>
        </table>
        <div class="pagination">
　    　<?php echo ($page); ?>
       </div>
      </div>
    </div>


          <div>
              <tbody>
              &nbsp;
              </tbody>
          </div>
          <div>
              <tbody>
              &nbsp;
              </tbody>
          </div>
          <div>
              <tbody>
              &nbsp;
              </tbody>
          </div>
          <div>
              <tbody>
              &nbsp;
              </tbody>
          </div>
          <div>
              <tbody>
              &nbsp;
              </tbody>
          </div>
        </div>
      </div>



   
<!-- content end -->
</div>
<a href="#" class="am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}">
  <span class="am-icon-btn am-icon-th-list"></span>
</a>

<footer>
  <hr>
  <p class="am-padding-left">© 2015 - 8 - 13------2015 - ? - ? </p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/bo/Public/Admin/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="/bo/Public/Admin/js/amazeui.min.js"></script>
<script src="/bo/Public/Admin/js/app.js"></script>
</body>
</html>