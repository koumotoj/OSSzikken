<?php

  require_once'../view/Schedule.php';
  require_once'../model/ScheduleDAO.php';

  session_start();

  $schedule_name = $_POST['name'];
  $schedule_evaluation = $_POST['eva'];
  $schedule_comment = $_POST['com'];
/*
  $hash = $_GET['hash'];
  $scheduleDao = new ScheduleDAO();
  $newschedule = $scheduleDao -> getschedule($hash);

  $newscheduleid = count(scheduleId());
  $newschedule = new Schedule($newscheduleid,$eventUrl,$candidateSchedule,$schedule_name,$schedule_evaluation,$schedule_comment);
  array_push($scheduleArray,$newschedule);
*/

  $_SESSION['display_name'] = $schedule_name;
  $_SESSION['evaluation'] = $schedule_evaluation;
  $_SESSION['comment'] = $schedule_comment;

  header('Location: ../view/Schedule.php');
  exit();
?>
