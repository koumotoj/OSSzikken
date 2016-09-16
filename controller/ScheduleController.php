<?php
require_once'/var/www/html/OSSzikken/model/EventDAO.php';
require_once'/var/www/html/OSSzikken/model/Event.php';
require_once'/var/www/html/OSSzikken/model/ScheduleDAO.php';
require_once'/var/www/html/OSSzikken/model/Schedule.php';

//$hash = $_GET['hash'];
session_start();
$hash = $_SESSION['url'];
$eventDao = new EventDAO();
$event = $eventDao -> getEvent($hash);

$scheduleDao = new ScheduleDAO();
$schedulelist = $scheduleDao -> getSchedule($hash);

$_SESSION['event']=$scheduleArray;

//$_POST['event'] = $event;
//$_POST['schedule'] = $schedule;

header('Location: ../view/Schedule.php');
exit();
