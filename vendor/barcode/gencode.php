<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="white">
<title></title>
<style type="text/css">
*{margin: 0;padding: 0;font-family: '微软雅黑';}
.warp{width:100%;}
.code{width: 60%;margin: 0 auto;overflow: hidden;}
.code img{width: 100%;}
.code-number{width: 100%;text-align: center;font-size: 1em;color: #333333;line-height: 2em;}
.code-title{width: 100%;height: 50px; text-align: center; font-size: 14px;line-height: 50px; color: #fff;background-image:linear-gradient(to top, #1481bb, #3aabe3); margin-bottom: 20px;-webkit-box-shadow:2px 2px 5px #909090; box-shadow:2px 2px 5px #909090;}
</style>
</head>

<body>
	<div class="warp">
		<h1 class="code-title">兑换码二维码</h1>
		<div class="code">
			<img src="barcode.php?codebar=BCGcode128&scale=2&ness=50&text=<?php echo $_GET['code'];?>" >
		</div>
		<p class="code-number"><?php echo $_GET['code'];?></p>
	</div>
</body>

</html>
