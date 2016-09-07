<?php
require_once '../model/UrlCreator.php';
require_once '../model/EventDAO.php';

$eventName = $_POST['event_name'];
$memo = $_POST['memo'];
$candidateSchedule = $_POST['candidate_schedule'];
$date = new DateTime();
$now = $date -> format("Y-m-d");

$hash = UrlCreator::createUrl($eventName);
$_POST['hash'] = $hash;
$eventDao = new EventDAO();
$eventDao -> setEvent($hash, $eventName, $memo, $candidateSchedule, $now);

header('Location: ../view/URLConfirm.php');
exit();
