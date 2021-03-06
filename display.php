<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="keywords" content="DueApe留学生辅导平台">
	<meta name="description" content="DueApe留学生辅导平台">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="app-mobile-web-app-capable" content="yes">
	<meta name="app-itunes-app" content="app-id=599473996">
	<title>首页</title>
	<link rel="stylesheet" type="text/css" href="css/basic.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
	<!-- banner js -->
	<script defer src="js/banner.js"></script> 
	<script type="text/javascript">
    $(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  	</script>
</head>
<body>
<div id="wrap">
	<div class="display_content">
		这里是详情页<br>
		<img src="images/banner.jpg" width="100%">
		课程介绍<br>
		<img src="images/banner.jpg" width="100%">
		期末复习<br>
		<img src="images/banner.jpg" width="100%">
		大学课程全包课<br>
	</div>
	<div class="display_l">
		<a href="tel:">咨询</a>
		<a href="tel:" class="a_1">分享</a>
	</div>
	<div class="display_b">
		<a href="">发布订单</a>
	</div>
	<div class="share_bg">
		<div class="share">
			<p>请点击微信右上角<br>然后选择发送给朋友或者分享到朋友圈</p>
			<span class="cha">确定</span>
		</div>
	</div>
</div>
<script type="text/javascript">
$(function(){
	$(".display_l .a_1").click(function(){
		$(".share_bg").show();
	});
	$(".cha").click(function(){
		$(".share_bg").hide();
	})
})
</script>
</body>
</html>