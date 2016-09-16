<?php

  require_once'/var/www/html/OSSzikken/model/EventDAO.php';
  require_once'/var/www/html/OSSzikken/model/Event.php';
  require_once'/var/www/html/OSSzikken/model/ScheduleDAO.php';
  require_once'/var/www/html/OSSzikken/model/Schedule.php';
  
  $schedule_name = $_POST['name'];
  $schedule_evaluation = $_POST['eva'];
  $schedule_comment = $_POST['com'];

  session_start();
  $hash = $_SESSION['url'];

  //$hash = $_GET['hash'];
  $event = new Event();
  $candidateschedule = $event -> getCandidateschedule();

  $scheduleDao = new ScheduleDAO();
  $scheduleDao -> setSchedule($hash,$candidateschedule,$schedule_name,$schedule_evaluation);	

  //$scheduleDao -> setSchedule($hash,$candidateschedule,$schedule_name,$schedule_evaluation,$schedule_comment);	

  header('Location: ../view/Schedule.php');
  exit();
