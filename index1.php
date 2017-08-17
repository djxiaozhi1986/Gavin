<?php
include_once("connect.php");

$sql = "select * from quiz order by id asc";
$query = mysqli_query($link,$sql);
while ($row = mysqli_fetch_array($query)) {
    $answers = explode('###', $row['answer']);
    $arr[] = array(
        'question' => $row['id'] . '、' . $row['question'],
        'answers' => $answers
    );
}
$json = json_encode($arr);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
        <title>演示： PHP+MySQL来实现在线测试quiz功能</title>
        <meta name="keywords" content="在线测试,PHP" />
        <meta name="description" content="在上一篇文章中，我们介绍了jQuery前端测试题效果。这篇文章将结合实例给大家介绍如何使用jQuery+PHP+MySQL来实现在线测试题，包括动态读取题目，答题完毕后台评分，并返回答题结果。" />
        <link rel="stylesheet" type="text/css" href="http://www.sucaihuo.com/jquery/css/common.css" />
        <link rel="stylesheet" type="text/css" href="style.css" />
        <style>
            .demo{width:760px; margin:60px auto 10px auto}
        </style>
    </head>
    <body>
        <div class="head">
            <div class="head_inner clearfix">
                <ul id="nav">
                    <li><a href="http://www.sucaihuo.com">首 页</a></li>
                    <li><a href="http://www.sucaihuo.com/templates">网站模板</a></li>
                    <li><a href="http://www.sucaihuo.com/js">网页特效</a></li>
                    <li><a href="http://www.sucaihuo.com/php">PHP</a></li>
                    <li><a href="http://www.sucaihuo.com/site">精选网址</a></li>
                </ul>
                <a class="logo" href="http://www.sucaihuo.com"><img src="http://www.sucaihuo.com/Public/images/logo.jpg" alt="素材火logo" /></a>
            </div>
        </div>
        <div class="container">
            <div class="demo">
                <h2 class="title"><a href="http://www.sucaihuo.com/js/113.html">教程：PHP+MySQL来实现在线测试quiz功能</a></h2>
                <div id='quiz-container'></div>
            </div>
        </div>
        <div class="foot">
            Powered by sucaihuo.com  本站皆为作者原创，转载请注明原文链接：<a href="http://www.sucaihuo.com" target="_blank">www.sucaihuo.com</a>
        </div>
        <script type="text/javascript" src="http://www.sucaihuo.com/Public/js/other/jquery.js"></script> 
        <script type="text/javascript" src="quizs.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#quiz-container').jquizzy({
                    questions: <?php echo $json; ?>,
                    sendResultsURL: 'ajax.php'
                });
            });
        </script>
    </body>
</html>
