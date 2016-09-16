<?php
/* ここからindex.php部分のテスト 
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>スケジュール追加ページ</title>
		<link href="../view/css/bootstrap.min.css" rel="stylesheet">
		<link href="../view/css_origin/pub.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>
<body>
<?php
require_once '../model/UrlCreator.php';
require_once '../model/EventDAO.php';

$eventName = $_POST['event_name'];
$memo = $_POST['memo'];
$candidateSchedule = $_POST['candidate_schedule'];
//$date = new DateTime();
//$now = $date -> format("Y-m-d");

//$hash = UrlCreator::createUrl($eventName);
//$_POST['hash'] = $hash;
//$eventDao = new EventDAO();
//$eventDao -> setEvent($hash, $eventName, $memo, $candidateSchedule, $now);

echo $eventName;
echo $memo;
echo '<br>';
echo $candidateSchedule; 

//header('Location: ../view/URLConfirm.php');
exit();

if (isset($_POST["event_name"])) {
	$_SESSION["test"] = "接続テスト中！";
}
</body>
</html>
*/
?>

<!-- URLConfirm.phpのテストも含めた -->
<?php
//セッションスタート
session_start();
require_once '../model/UrlCreator.php';
require_once '../model/EventDAO.php';

$eventName = $_POST['event_name'];
//$memo = $_POST['memo'];
//$candidateSchedule = $_POST['candidate_schedule'];
//$date = new DateTime();
//$now = $date -> format("Y-m-d");

//$hash = UrlCreator::createUrl($eventName);
//$_POST['hash'] = $hash;
//$eventDao = new EventDAO();
//$eventDao -> setEvent($hash, $eventName, $memo, $candidateSchedule, $now);
if (isset($_POST['event_name'])) {
	$_SESSION['test'] = $eventName;
	//$_SESSION['test'] = "testだよ";
}
header('Location: ../view/URLConfirm.php');
//exit();
?>
