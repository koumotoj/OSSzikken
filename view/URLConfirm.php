<!--
author：Tomoya Morimoto
date：2016/08/31
comment:

-->
<?php
	session_start();
    $test = $_SESSION['url'];
	$html = "../controller/ScheduleController.php?=hash=";
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>URL作成画面</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css_origin/pub.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>
<body>
<br>
 <div class="box1">
  <h1>調整くん</h1>
 </div>
<!-- <form action="../controller/ScheduleController.php" method="get"> -->
 <form action="<?php echo $html . "+" . $test; ?>" method="get"> 
  <div class="p_center">
  ↓　あなたが開いたイベントのURL　↓
  </div>
  
  <div class="box_center">
  <?php
  /*
	//if( ($test = $_SESSION['test']) == null) {
	//	echo "<p>エラー！</p>";
	//} else {
	$test = $_SESSION['url'];
	$html = "../controller/ScheduleController.php?=hash=";
  */
  ?>
  <input type="text" name="hash" size="50" maxlength="100" value="<?php echo $test; ?>">
  </div> 
<!-- <form action="../controller_viewtest/ScheduleController.php" method="post"> -->
<!-- <form action="../controller/ScheduleController.php" method="post"> -->
  <input type="submit" name="haribote2" value="スケジュール表示" />
 </form>	
</body>
</html>
