<?php
    $Name = $_GET['name'];
    $Say = $_GET['say'];
    $Name_B = $_GET['name_b'];
    $Time_Year = $_GET['time_year'];
    $Time_Month = $_GET['time_month'];
    $Time_Day = $_GET['time_day'];
?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
<title>Heart</title>

<style type="text/css">
@font-face {
	font-family: digit;
	src: url('digital-7_mono.ttf') format("truetype");
}
</style>

<link href="css/default.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/garden.js"></script>
<script type="text/javascript" src="js/functions.js"></script>

</head>
<body>

<div id="mainDiv">
	<div id="content">
		<div id="code">
			<span class="comments">
                <?php echo $Say;?>
            </span><br />
			<br>
			<br>
			向右滑看看<br />
		</div>
		<div id="loveHeart">
			<canvas id="garden"></canvas>
			<div id="words">
				<div id="messages">
					亲爱的，这是我们相爱在一起的时光。
					<div id="elapseClock"></div>
				</div>
				<div id="loveu">
                    爱你直到永永远远。<br/>
                    <div class="signature">- <?php echo $Name_B;?></div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
var offsetX = $("#loveHeart").width() / 2;
var offsetY = $("#loveHeart").height() / 2 - 55;
var together = new Date();
/**together.setFullYear(2013, 2, 28);**/
together.setFullYear(<?php echo $Time_Year.","." ".$Time_Month.","." ".$Time_Day;?>);
together.setHours(20);
together.setMinutes(0);
together.setSeconds(0);
together.setMilliseconds(0);

if (!document.createElement('canvas').getContext) {
	var msg = document.createElement("div");
	msg.id = "errorMsg";
	msg.innerHTML = "Your browser doesn't support HTML5!<br/>Recommend use Chrome 14+/IE 9+/Firefox 7+/Safari 4+"; 
	document.body.appendChild(msg);
	$("#code").css("display", "none")
	$("#copyright").css("position", "absolute");
	$("#copyright").css("bottom", "10px");
	document.execCommand("stop");
} else {
	setTimeout(function () {
		startHeartAnimation();
	}, 5000);

	timeElapse(together);
	setInterval(function () {
		timeElapse(together);
	}, 500);

	adjustCodePosition();
	$("#code").typewriter();
}
</script>
<div style="text-align:center;clear:both"></div>
</body>
</html>