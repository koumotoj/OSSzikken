<?php

  require_once'../view/Schedule.php';
  require_once'../model/ScheduleDAO.php';

  session_start();
/*
  $schedule_name = $_POST[''];
  $schedule_evaluation = $_POST[''];
  $schedule_comment = $_POST[''];

  $hash = $_GET['hash'];
  $scheduleDao = new ScheduleDAO();
  $newschedule = $scheduleDao -> getschedule($hash);

  $newscheduleid = count(scheduleId());
  $newschedule = new Schedule($newscheduleid,$eventUrl,$candidateSchedule,$schedule_name,$schedule_evaluation,$schedule_comment);
  array_push($scheduleArray,$newschedule);
*/

  $_SESSION['display_name'] = "あーいせんぱい";
  $_SESSION['evaluation'] = 2;
  $_SESSION['comment'] = "飲み会にいってる場合じゃねぇ!";

  header('Location: ../view/Schedule.php');
  exit();
?>