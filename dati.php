<?php
include_once("connect.php");
$sql = "select * from questions order by q_id asc";
$query = mysqli_query($link,$sql);
$q_arr = array();
while ($row = mysqli_fetch_array($query)) {
    //查询问题
   $q_arr[]=$row;
}
$sql1 = "select * from answers";
$query1 = mysqli_query($link,$sql1);
$a_arr = array();
while ($row = mysqli_fetch_array($query1)) {
    //查询答案
    $a_arr[]=$row;
}
$user_id = $_GET['user_id'];

$i=0;
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
		<title>答题</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/Font-Awesome-3.2.1/css/font-awesome.min.css"  />
		<link rel="stylesheet" href="css/style.css" />
        <script type="text/javascript" src="js/jquery.min.js"></script>
		
	</head>
	<body>
    <div class="wrap">
        <div class="dati_ti">
            <p class="fl">单项题</p>
            <p class="fr">已完成<span id="current_q">0</span>/<span>50</span></p>
        </div>
        <div class="clear"></div>
    <?php
    foreach ($q_arr as $q_item){
        ?>
        <div id="q_<?php echo $q_item['q_id']?>" <?php if($i>0){?> style="display: none" <?php }?>>
            <div class="dati_biao">
                <p class="dati_biapp"><?php echo $i+1 ?>.
                    <?php echo $q_item['question'] ?></p>
            </div>
            <div class="kt"></div>
            <?php
            foreach ($a_arr as $a_item){
                if($a_item['q_id']==$q_item['q_id']){
                    ?>
                    <div class="dati_xuanz">
                        <label>
                            <input type="radio" name="answer_<?php echo $a_item['q_id']?>" value="<?php echo $a_item['score']?>" class="bianhuaz answer_<?php echo $a_item['q_id']?>"><span><?php echo $a_item['answer']?></span>
                        </label>
                    </div>
                    <?php
                }
            }
            ?>
            <div class="kt1"></div>
            <?php if($i<count($q_arr)-1){
                ?>
                <div class="dati_buttomsg">
                    <button type="button" class="data_buttom11 btn btn-default" onclick="next(<?php echo $q_item['q_id']?>,<?php echo $q_arr[$i+1]['q_id'] ?>,<?php echo $i+1?>)">下一题</button>
                </div>
                <?php
            }else{
                ?>
                <div class="dati_buttomsg">
                    <button type="button" class="data_buttom11 btn btn-default" onclick="complete(<?php echo $q_item['q_id']?>)">提交</button>
                </div>
                <?php
            }?>
        </div>
        <?php
        $i++;
    }
    ?>

    <input id="hd_score" type="hidden" value="0">

    </div>
    <script>
        function next(this_q_id,next_q_id,index) {
            $("#current_q").html(""+index);
            var old_score = parseFloat($("#hd_score").val());
            var radio_name = 'answer_'+this_q_id;
            if($("."+radio_name+":checked").val()!='' && $("."+radio_name+":checked").val()!=undefined){
                var score = parseFloat($("."+radio_name+":checked").val());
                $("#hd_score").val(old_score+score);
                $("#q_"+this_q_id).hide();
                $("#q_"+next_q_id).show();
            }
        }
        function complete(this_q_id) {
            location.href='result.php?user_id=<?php echo $user_id?>&score='+$("#hd_score").val();
        }
    </script>
	</body>
</html>
