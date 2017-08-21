<?php
$user_id = $_GET['user_id'];
$score = $_GET['score'];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="format-detection" content="telephone=no">
		<meta http-equiv="x-dns-prefetch-control" content="on">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>上传报告/回答问卷</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/Font-Awesome-3.2.1/css/font-awesome.min.css"  />
		<link rel="stylesheet" href="css/style.css" />
		<style>
            .file {
                position: relative;
                display: inline-block;
                overflow: hidden;
                text-decoration: none;
                text-indent: 0;
                line-height: 20px;
            }
            .file input {
                position: absolute;
                font-size: 100px;
                right: 0;
                top: 0;
                opacity: 0;
            }
        </style>
	</head>
	<body>
		
		<div class="wrap">
			<div class="data">
				<img src="img/backgr.jpg" width="100%" height="100%">
				<div class="readeport">
					<img class="bianhua" src="img/report.png" width="80%"  />
					<div class="readeport_h3">
						<h3>完成系列问卷和信息沟通，您的私人防癌顾问将为您出具专属于您的专业防癌方案”</h3>
					</div>
					<div class="readeport_anndghfg">
						<div class="readeport_xuanzui">
							<p>上传您以往的体检报告照片</p>
<!--                            <a href="javascript:;" class="data_buttom bansf btn btn-primary btn-lg btn-block file">提交体检报告-->
<!--                                <input type="file" type="file" accept="image/*" multiple>-->
<!--                            </a>-->
							<a class="data_buttom bansf btn btn-primary btn-lg btn-block" href="img_up_report.php?user_id=<?php echo $user_id?>&score=<?php echo $score?>">提交体检报告</a>
						</div>
						<div class="readeport_xuanzui">
							<p>没有报告请选择下面选项</p>
							<button type="button" class="data_buttom bansf btn btn-primary btn-lg btn-block">解析慢病秘密</button
						</div>
					</div>
					
					
					
				</div>
					
			</div>
				
			<!--<button type="button" class="data_buttom bansf btn btn-primary btn-lg btn-block">开始答题</button>-->
			
		</div>	
				
		
	</body>
</html>
