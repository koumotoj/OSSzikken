<!--
author：Tomoya Morimoto
date：2016/08/31
comment:
参考URL-＞http://blog.codebook-10000.com/entry/20140525/1400993169
グリッドシステムを用いて、作成中。
トップページを表示しています。

***時間が余ったら修正したいリスト***
１、<br>をなくしたい
２、モジュール設計書の仕様（見た目）と少し違う。

***グリッドシステムって？***
bootstarpについているシステム
一列を12個の箱に分割しているらしい。
-->
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>メインページ</title>
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
  
  <form action="../controller/MainPageController.php" method="post">
   <div class="row">
    <div class="col-md-4 hidden-xs">
    <p>イベント名：</p>
    <input id="event_name" maxlength="100" name="event_name" value="" type="text" />
   </div>

   <div class="col-md-1 hidden-xs">
   </div>

   <div class="col-md-6 hidden-xs">
	<!-- 今は1つだけしか入れられない -->
    <p>日程：</p>
    <textarea name="candidate_schedule" cols=30 rows=6></textarea>
   </div>

  </div>

 <!-- 2列目のグリッド -->
  <div class="row">
   <div class="col-md-4 hidden-xs">
    <p>メモ：</p>
    <textarea name="memo" cols=30 rows=5></textarea>
   </div>
  
   <div class="col-md-1 hidden-xs">
   </div>
 
   <div class="col-md-4 hidden-xs" style="position: relative;">
    <br> <br> <br> <br> <br> <br> 
    <input type="submit" name="haribote" value="イベント新規作成" />
   </div>
  
  </div>
 </form>
 <br>
</div>		
</body>
</html>
