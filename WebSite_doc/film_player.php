
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" />
<title><?php
$myfile = fopen("info_name.ini", "r") or die("Unable to open file!");
$info=fread($myfile,filesize("info_name.ini"));
$info=("成外ACG==》".$info);
echo $info;
?></title>
<link rel="stylesheet" type="text/css" href="https://raw.githubusercontent.com/xiawenke/New_ACG_WebSite_Project/master/WebSite_doc/reset.css"/>
<link rel="stylesheet" href="https://raw.githubusercontent.com/xiawenke/New_ACG_WebSite_Project/master/WebSite_doc/bootstrap.css">
<link rel="stylesheet" type="../text/css" href="https://raw.githubusercontent.com/xiawenke/New_ACG_WebSite_Project/master/WebSite_doc/willesPlay.css"/>
<script src="https://raw.githubusercontent.com/xiawenke/New_ACG_WebSite_Project/master/WebSite_doc/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
<script src="https://raw.githubusercontent.com/xiawenke/New_ACG_WebSite_Project/master/WebSite_doc/willesPlay.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div id="willesPlay">
	<div class="playHeader">
		<div class="videoName"><?php
$myfile = fopen("info_name.ini", "r") or die("Unable to open file!");
echo fread($myfile,filesize("info_name.ini"));
?></div>
	</div>
	<div class="playContent">
		<div class="turnoff">
			<ul>
				<li><a href="javascript:;" title="喜欢" class="glyphicon glyphicon-heart-empty"></a></li>
				<li><a href="javascript:;" title="关灯" class="btnLight on glyphicon glyphicon-sunglasses"></a></li>
				<li><a href="javascript:;" title="分享" class="glyphicon glyphicon-share"></a></li>
			</ul>
		</div>
		<video width="100%" height="100%" id="playVideo">
			<source src="<?php
$myfile = fopen("upload_file_name.ini", "r") or die("Unable to open file!");
echo fread($myfile,filesize("upload_file_name.ini"));
?>" type="video/mp4"></source>
			当前浏览器不支持 video直接播放，点击这里下载视频： <a href="<?php
$myfile = fopen("upload_file_name.ini", "r") or die("Unable to open file!");
echo fread($myfile,filesize("upload_film_name.ini"));
?>">下载视频</a>
		</video>
		<div class="playTip glyphicon glyphicon-play"></div>
	</div>
	<div class="playControll">
		<div class="playPause playIcon"></div>
		<div class="timebar">
			<span class="currentTime">0:00:00</span>
			<div class="progress">
				<div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
				</div>
			<span class="duration">0:00:00</span>
		</div>
		<div class="otherControl">
			<span class="volume glyphicon glyphicon-volume-down"></span>
			<span class="fullScreen glyphicon glyphicon-fullscreen"></span>
			<div class="volumeBar">
					<div class="volumewrap">
						<div class="progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 8px;height: 40%;"></div>
					</div>
						</div>
				</div>
		</div>
	</div>
</div>
			
		</div>
	</div>
</div>

<div style="text-align:center;clear:both;">
	<script src="../gg_bd_ad_720x90.js" type="text/javascript"></script>
	<script src="../follow.js" type="text/javascript"></script>
</div>
</body>
</html>
