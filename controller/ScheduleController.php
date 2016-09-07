<?php
require_once'../model/EventDAO.php';
require_once'../model/Event.php';
require_once'../model/ScheduleDAO.php';
require_once'../model/Schedule.php';

$hash = $_GET['hash'];
$eventDao = new EventDAO();
$event =$eventDao -> getEvent($hash);

$scheduleDao = new ScheduleDAO();
$schedule =$scheduleDao -> getSchedule($hash);

$_POST['event'] = $event;
$_POST['schedule'] = $schedule;

header('Location: ../view/Schedule.php');
exit();
