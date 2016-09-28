<?php
require_once '/var/www/html/OSSzikken/model/UrlCreator.php';
require_once '/var/www/html/OSSzikken/model/EventDAO.php';

$eventName = $_POST['event_name'];
$memo = $_POST['memo'];
$candidateSchedule = $_POST['candidate_schedule'];
$date = new DateTime();
$now = $date -> format("Y-m-d");

$hash = UrlCreator::createUrl($eventName);
session_start();
$_SESSION['url'] = $hash;
//$_POST['hash'] = $hash;
$eventDao = new EventDAO();
$eventDao -> setEvent($hash, $eventName, $memo, $candidateSchedule, $now);

if((mb_strlen($memo) >= 100) || (mb_strlen($candidateSchedule) >= 100)){
	header('Location: ../view/error.php');
	exit();
}

header('Location: ../view/URLConfirm.php');
exit();
