<?php
session_start();
$event_array[0] = "0bannme";
$event_array[1] = "1bannme";

$schedule_array[0] = "0bannme";
$schedule_array[1] = "1bannme";
$schedule_array[2] = "2bannme";
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
$_SESSION['event'] = $event_array;
$_SESSION['schedule'] = $schedule_array;

header('Location: ../view/Schedule.php');
exit();
