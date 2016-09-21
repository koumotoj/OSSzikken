<?php 
require_once 'Schedule.php';

class ScheduleDAO{
	public function setSchedule($eventUrl, $candidateSchedule, $displayName, $evaluation, $comment){
		$db = new PDO("mysql:host=localhost;dbname=choseikun", "root", "kickic");
     		
		$sql = "INSERT INTO schedule (event_url, candidate_schedule, display_name, evaluation, comment) VALUES (:event_url, :candidate_schedule, :display_name, :evaluation, :comment);";
		$ps = $db ->prepare($sql);
		$ps -> bindParam(":event_url", $eventUrl);
		$ps -> bindParam(":candidate_schedule", $candidateSchedule);
		$ps -> bindParam(":display_name", $displayName);
		$ps -> bindParam(":evaluation", $evaluation);
		$ps -> bindParam(":comment", $comment);
		$ps -> execute();
	}

	public function getSchedule($eventUrl){
		$scheduleArray = array();
                $db = new PDO("mysql:host=localhost;dbname=choseikun", "root", "kickic");
                $sql = "SELECT schedule_id, event_url, candidate_schedule, display_name, evaluation FROM schedule WHERE event_url = :event_url;";
                $ps = $db -> prepare($sql);
                $ps -> bindParam(":event_url", $eventUrl);
                $ps -> execute();
		while($row = $ps -> fetch()){
                        $scheduleId = $row['schedule_id'];;
                        $eventUrl = $row['event_url'];
                        $candidateSchedule = $row['candidate_schedule'];
                        $displayName = $row['display_name'];
                        $evaluation = $row['evaluation'];
			$comment = $row['comment'];
                        $schedule = new Schedule($scheduleId, $eventUrl, $candidateSchedule, $displayName, $evaluation, $comment);
                        array_push($scheduleArray, $schedule);
                }
                return $scheduleArray;


	}
}
