<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<title>Admin Panel</title>
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/app.css">
<link rel="stylesheet" type="text/css" href="css/main.css">

<!-- 扩展css -->
<link rel="stylesheet" type="text/css" href="lib/select/css/bootstrap-select.min.css">

<script src="js/jquery.min.js"></script>
</head>
<body>
<div id="app">
	<div class="sidebar">
		<div class="header-logo">
			<img src="images/logo.png" class="big">
			<img src="images/logo2.jpg" class="lat">
		</div>
		<ul class="header-menu-ul">
			<li><a href="index.php"><i class="fa fa-fw fa-tachometer"></i><span class="title">控制台</span></a>
			</li>
			<li><a href="#"><i class="fa fa-fw fa-cog"></i><span class="title">设置</span><span class="arrow"></span></a>
				<ul class="sub">
					<li class=""><a href="#">基本设置<span class="arrow"></span></a>
						<ul class="subsub">
							<li><a href="sys.php">基本设置</a></li>
							<li><a href="#">视频转换</a></li>
							<li><a href="mail.php">邮件配置</a></li>
							<li><a href="#">静态页面</a></li>
							<li><a href="ad.php">广告设置</a></li>
						</ul>
					</li>
					<li><a href="#">视频转换</a></li>
					<li><a href="#">系统安全</a></li>
					<li><a href="#">广告设置</a></li>
				</ul>
			</li>
			<li><a href="#"><i class="fa fa-fw fa-bar-chart"></i><span class="title">统计</span></a></li>
			<li><a href="#"><i class="fa fa-fw fa-money"></i><span class="title">财务</span></a></li>
			<li><a href="#"><i class="fa fa-fw fa-video-camera"></i><span class="title">视频</span></a></li>
			<li><a href="#"><i class="fa fa-fw fa-camera"></i><span class="title">照片</span></a></li>
			<li><a href="#"><i class="fa fa-fw fa-book"></i><span class="title">小说</span></a></li>
			<li><a href="#"><i class="fa fa-fw fa-cloud-download"></i><span class="title">下载</span></a></li>
			<li><a href="#"><i class="fa fa-fw fa-bed"></i><span class="title">性息</span></a></li>
			<li><a href="user.php"><i class="fa fa-fw fa-user"></i><span class="title">用户</span></a></li>
			<li><a href="category.php"><i class="fa fa-fw fa-th-large"></i><span class="title">分类</span></a></li>
		</ul>
	</div>

	<div class="header">
		<div class="header-navicon">
			<button type="button" class="btn bg-n btn-all-null btn-to-full"><span><i class="fa fa-navicon f-20" ></i></span></button>
			<a class="btn bg-n btn-all-null"><span><i class="fa fa-home f-20" ></i></span></a>
		</div>
		<div class="header-avator">
			<ul>
				<li><span class="fa fa-arrows-alt f-18 c-p" id="view-fullscreen" data-toggle="tooltip" data-placement="left" title="全屏"></span>
					<span class="fa fa-compress f-18 c-p" id="cancel-fullscreen" data-toggle="tooltip" data-placement="left" title="取消全屏"></span>
				</li>
				<li><span class="fa fa-lock f-20 c-p" id="view-lock" data-toggle="tooltip" data-placement="left" title="锁屏"></span></li>
				<li>
					<div class="dropdown" data-toggle="tooltip" data-placement="left" title="暂无提醒">
					  <span class="fa fa-bell f-18 p-r dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><sup class="badge-dot"></sup></span>
					  	<ul class="dropdown-menu">
		                  <li><a href="#">暂无提醒</a></li>
		                </ul>
					</div>
				</li>
				<li>
					<div class="dropdown">
					  <button href="#" class="dropdown-toggle btn-all-null" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin<span class="caret"></span>
					  </button>
					  	<ul class="dropdown-menu">
		                  <li><a href="#">个人资料</a></li>
		                  <li role="separator" class="divider"></li>
		                  <li><a href="login.html"><i class="fa fa-power-off"></i>退出</a></li>
		                </ul>
					</div>
				</li>
			</ul>
		</div>
	</div>


