<!--
author：Tomoya Morimoto
date：2016/09/09
comment:
参考URL-＞http://blog.codebook-10000.com/entry/20140525/1400993169
グリッドシステムを用いて、作成中。
トップページを表示しています。

***時間が余ったら修正したいリスト***


***グリッドシステムって？***
bootstarpについているシステム
一列を12個の箱に分割しているらしい。
-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>スケジュール追加ページ</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css_origin/pub.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>
<body>
<br>
 <div class="container">
	
  <div class="box1">
   <h1>調整くん</h1>
  </div>
  
  <!-- 一列目のグリッド -->
  <!-- <form action="../controller_viewtest/ScheduleAddController.php" method="post"> -->
  <form action="../controller/ScheduleAddController.php" method="post">
   <div class="row">
    <div class="col-md-4 hidden-xs">
    <p>表示名：</p>
    <textarea name="name" cols=30 rows=1></textarea>
   </div>
  </div>

 <!-- 2列目のグリッド-->
  <div class="row">
   <div class="col-md-12 hidden-xs">
	   <br>
    <p>日にち候補</p>
     <!-- 日にち候補はDBから取得 -->
     
     <?php
				$schedule = $_SESSION['schedule1'];
				echo "$schedule";
	?>
      <!-- 2016/09/20 18:00 -->
      <!-- nameの部分はdate + 日にち候補にする --> 
      <!-- <form action="../controller_viewtest/ScheduleAddController.php" method="post" style="display: inline"> -->
      <select name="eva" id="eva">
		  <option value="0" selected="selected">○</option>
		  <option value="1" selected="selected">△</option>
		  <option value="2" selected="selected">×</option>
      </select>
      
      <!--
      <input type="hidden" name="eva" value="0" />
      <input type="button" value="○" />
      
      <input type="hidden" name="eva" value="1" />
      <input type="button" value="△" />
      
      <input type="hidden" name="eva" value="2" />
      <input type="button" value="×" />
      -->
     
   </div>
  
  </div>
  <!-- 3列目のグリッド -->
  <div class="row">
   <div class="col-md-4 hidden-xs">
	<br>
    <p>コメント：</p>
    <textarea name="com" cols=30 rows=6></textarea>
   </div>
 
   <div class="col-md-1 hidden-xs" style="position: relative;">
    <br> <br> <br> <br> <br> <br> 
    <input type="submit" name="haribote" value="投稿" />
   </div>
  </div>
<!-- </form> -->
 <br>
</div>		
</body>
</html>
