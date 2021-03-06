<?php
$user_id = $_GET['user_id'];
$score = $_GET['score'];
$gender = $_GET['gender'];
if ($score<=15){
    $value = '低风险';
    $desc = "从医学的角度判定，在所有测试的与癌症相关生活方式的高危因素中，您仅仅有极少或相关性较低的个别项目处于高危，因此，可以初步判定您的生活方式是相对健康的，属于低风险。请保持您的健康习惯，纠正不当的个别习惯，将对您预防肿瘤、甚至癌前疾病的发生有至关重要的作用。";
}else if($score>15 && $score<=30){
    $value = '中风险';
    $desc = "从医学的角度判定，在所有测试的与癌症相关生活方式的高危因素中，您有不高于50%的因素在日常生活中经常接触，属于中等风险。这些因素的暴露，大大增加了肿瘤发生的几率，建议您尽量减少这些因素的暴露，比如减少吸烟或者二手烟环境，改善家庭空气环境，增加果蔬摄入，如果有部分职业因素等不可短期避免，则应尽量定期进行专业的专业的肿瘤防治的深度筛查。从流行病学角度来讲，建议40岁以上的人士，每年进行专业的肿瘤筛查，是目前国际共识的肿瘤预防理念与行动指南，通过降低风险和早诊早治，降低肿瘤带来的巨大负担。";
}else if($score>30 && $score<=80){
    $value = '高风险';
    $desc = "从医学的角度判定，在所有测试的与癌症相关生活方式的高危因素中，您有超过50%以上的因素都具备，且属于高风险。这些因素加重了您罹患肿瘤的几率，不能够忽视。我们建议在具体行为方式上，您需要有所改变：避免吸烟、二手烟的环境，增加果蔬摄入量，如有职业、居住地致癌因素暴露的情况，应考虑尽量减少暴露；对于有慢性病、癌前疾病等，应每年/半年进行一次复查，切不可忽视旧疾。有肿瘤家族史的，须高度重视，在通过专业遗传咨询或遗传性肿瘤基因检测确认后，排查遗传性的可能，避免在以上测试中的所有高危因素下暴露。从流行病学角度来讲，建议40岁以上的人士，每年进行权威的、系统的癌症筛查，是目前国际共识的肿瘤预防理念与行动指南，通过降低风险和早诊早治，降低肿瘤带来的巨大负担。您的情况属于高危人群，建议您可考虑从现在起（无论年龄是否高于40岁），每年一定参与专业的肿瘤筛查。生活方式的改变，可以降低30%左右的肿瘤死亡率，但针对高危人群的早诊早治筛查可以降低大约50%左右的死亡率，是目前肿瘤预防的最有效手段，对您的要求就是行动起来，从专业防癌体检开始！";
}else if($score>80){
    $value = '极高风险';
    $desc = "从医学的角度判定，在所有测试的与癌症相关生活方式的高危因素中，几乎所有的因素您都具备，且属于极高风险。这些因素无疑会在漫长的接触中增加了您罹患肿瘤的几率，一定不能够忽视。我们建议在具体行为方式上，您必须有所改变：避免吸烟、二手烟的环境，增加果蔬摄入量，如有职业、居住地致癌因素暴露的情况，应考虑尽量减少暴露；对于有慢性病、癌前疾病等，应每年/半年进行一次复查，切不可忽视旧疾。有肿瘤家族史的，须高度重视，在通过专业遗传咨询或遗传性肿瘤基因检测确认后，排查遗传性的可能，避免在以上测试中的所有高危因素下暴露。从流行病学角度来讲，建议40岁以上的人士，每年进行权威的、系统的癌症筛查，是目前国际共识的肿瘤预防理念与行动指南，通过降低风险和早诊早治，降低肿瘤带来的巨大负担。您的情况属于极度高危人群，您必须考虑从现在起（无论年龄是否高于40岁），每年一定参与专业的肿瘤筛查。生活方式的改变，可以降低30%左右的肿瘤死亡率，但针对高危人群的早诊早治筛查可以降低大约50%左右的死亡率，是目前肿瘤预防的最有效手段，对您的要求就是行动起来，从专业防癌体检开始！";
}
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
		<title>生活方式测试结果</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/Font-Awesome-3.2.1/css/font-awesome.min.css"  />
		<link rel="stylesheet" href="css/style.css" />
        <script type="text/javascript" src="js/jquery.min.js"></script>
		
	</head>
	<body>
		<div class="wrap">
			<div class="result">
				<img src="img/jieguo.jpg" width="100%" height="100%">
				<p>您的结果:低风险</p>
				
			</div>
			<div class="result_p">
				<p>
				从医学的角度判定，在所有测试的与癌症相关生活方式的高危因素中，您有超过50%以上的因素都具备，且属于高风险。这些因素加重了您罹患肿瘤的几率，不能够忽视。我们建议在具体行为方式上，您需要有所改变：避免吸烟、二手烟的环境，增加果蔬摄入量，如有职业、居住地致癌因素暴露的情况，应考虑尽量减少暴露；对于有慢性病、癌前疾病等，应每年/半年进行一次复查，切不可忽视旧疾。有肿瘤家族史的，须高度重视，在通过专业遗传咨询或遗传性肿瘤基因检测确认后，排查遗传性的可能，避免在以上测试中的所有高危因素下暴露。从流行病学角度来讲，建议40岁以上的人士，每年进行权威的、系统的癌症筛查，是目前国际共识的肿瘤预防理念与行动指南，通过降低风险和早诊早治，降低肿瘤带来的巨大负担。您的情况属于高危人群，建议您可考虑从现在起（无论年龄是否高于40岁），每年一定参与专业的肿瘤筛查。生活方式的改变，可以降低30%左右的肿瘤死亡率，但针对高危人群的早诊早治筛查可以降低大约50%左右的死亡率，是目前肿瘤预防的最有效手段，对您的要求就是行动起来，从专业防癌体检开始！

				</p>
				
			</div>
			
			<div class="dati_buttomsg1">
				<button id="btn_next" onclick="next()" href="up_report.php?user_id=<?php echo $user_id?>&score=<?php echo $score?>" class="data_buttomcc btn btn-default">进行下一步</>
<!--				<a href="up_report.php?user_id=--><?php //echo $user_id?><!--&score=--><?php //echo $score?><!--" class="data_buttomcc btn btn-default">进行下一步</a>-->
			</div>
			
		
		</div>
	</body>
    <script>
        function next() {
            location.href='up_report.php?user_id=<?php echo $user_id?>&gender=<?php echo $gender?>&score=<?php echo $score?>';
        }
    </script>
</html>
