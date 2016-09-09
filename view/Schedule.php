<!--
author：Tomoya Morimoto
date：2016/08/31
comment:

-->
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>スケジュール表示ページ</title>
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
 
  <div class="p_center">
   <table border=1>
    <tr>
		<th><!-- ここは空白 --></th>
		<!-- 名前はデータベースから取り出す -->
		<th>
			Aさん
		</th>
		<th>
			Bさん
		</th>
		<th>
			Cさん
		</th>
		<!-- ここまで -->
	</tr>
	
	<!-- 日程1表示部分 -->
	<tr>
		<th>
			日程1
		</th>
		<th>
			Aさんの評価
		</th>
		
		<th>
			Bさんの評価
		</th>
		<th>
			Cさんの評価
		</th>
	</tr>
	
	<!-- 日程2表示部分 -->
	<tr>
		<th>
			日程2
		</th>
		<th>
			Aさんの
		</th>
		<th>
			Bさんの
		</th>
		<th>
			Cさんの
		</th>
	</tr>
	
	<!-- コメント欄 -->
	<tr>
		<th>
			コメント
		</th>
		<th>
			Aさんのコメント
		</th>
		<th>
			Bさんのコメント
		</th>
		<th>
			Cさんのコメント
		</th>
	</tr>
	 
   </table>
  </div>

 <form>
	  <input type="button" name="haribote2" value="イベント新規作成" />
 </form>
 <br>
</div>		
</body>
</html>
