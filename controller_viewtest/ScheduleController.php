<?php
session_start();
/*
require_once'../model/EventDAO.php';
require_once'../model/Event.php';
require_once'../model/ScheduleDAO.php';
require_once'../model/Schedule.php';

$hash = $_GET['hash'];
$eventDao = new EventDAO();
$event =$eventDao -> getEvent($hash);

$scheduleDao = new ScheduleDAO();
$schedule =$scheduleDao -> getSchedule($hash);
*/
$event = "eventtest_テスト";
$schedule = "schedule_テスト";
$_SESSION['event'] = $event;
$_SESSION['schedule'] = $schedule;

header('Location: ../view/Schedule.php');
exit();
