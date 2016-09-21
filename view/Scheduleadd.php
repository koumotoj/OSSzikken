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
  <form action="../controller_viewtest/ScheduleAddController.php" method="post">
   <div class="row">
    <div class="col-md-4 hidden-xs">
    <p>表示名：</p>
    <textarea name="event" cols=30 rows=1></textarea>
   </div>
  </div>

 <!-- 2列目のグリッド-->
  <div class="row">
   <div class="col-md-12 hidden-xs">
	   <br>
    <p>日にち候補</p>
     <!-- 日にち候補はDBから取得 -->
     <p>
     <?php
				$schedule = $_SESSION['schedule1'];
				echo "$schedule";
	?>
      <!-- 2016/09/20 18:00 -->
      <!-- nameの部分はdate + 日にち候補にする --> 
      <input type="button" name="haribote" value="　0　＝　○" />
      <input type="button" name="haribote" value="　1　＝　△" />
      <input type="button" name="haribote" value="　2　＝　×" />
     </p>
     <p>2016/09/21 21:00
      <input type="button" name="haribote" value="　0　＝　○" />
      <input type="button" name="haribote" value="　1　＝　△" />
      <input type="button" name="haribote" value="　2　＝　×" />
     </p>
     <p>2016/09/22 17:00
      <input type="button" name="haribote" value="　0　＝　○" />
      <input type="button" name="haribote" value="　1　＝　△" />
      <input type="button" name="haribote" value="　2　＝　×" />
     </p>
   </div>
  
  </div>
  <!-- 3列目のグリッド -->
  <div class="row">
   <div class="col-md-4 hidden-xs">
	<br>
    <p>コメント：</p>
    <textarea name="date" cols=30 rows=6></textarea>
   </div>
 
   <div class="col-md-1 hidden-xs" style="position: relative;">
    <br> <br> <br> <br> <br> <br> 
    <input type="submit" name="haribote" value="投稿" />
   </div>
  </div>
 </form>
 <br>
</div>		
</body>
</html>
