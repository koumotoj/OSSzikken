<?php
require_once 'Event.php';
class EventDAO{
	function setEvent($eventUrl, $eventName, $memo, $candidateSchedule, $registrationDate){
		$db = new PDO("mysql:host=localhost;dbname=choseikun", "root", "kickic");
		$sql = "INSERT INTO event (event_url, event_name, memo, candidate_schedule, registration_date) VALUES (:event_url, :event_name, :memo, :candidate_schedule, :registration_date);";
		$ps = $db ->prepare($sql);
		$ps -> bindParam(":event_url", $eventUrl);
		$ps -> bindParam(":event_name", $eventName);
		$ps -> bindParam(":memo", $memo);
		$ps -> bindParam(":candidate_schedule", $candidateSchedule);
		$ps -> bindParam(":registration_date", $registrationDate);
		$ps -> execute();
	}

	function getEvent($eventUrl){
		$eventArray = array();
		$db = new PDO("mysql:host=localhost;dbname=choseikun", "root", "kickic");
                $sql = "SELECT event_url, event_name, memo, candidate_schedule, registration_date FROM event WHERE event_url = :event_url;";
		$ps = $db -> prepare($sql);
		$ps -> bindParam(":event_url", $eventUrl);
		$ps -> execute();
		while($row = $ps -> fetch()){
			$eventUrl = $row['event_url'];
			$eventName = $row['event_name'];
			$memo = $row['memo'];
			$candidateSchedule = $row['candidate_schedule'];
			$registrationDate = $row['registration_date'];
			$event = new Event($eventUrl, $eventName, $memo, $candidateSchedule, $registrationDate);
			push_array($eventArray, $event);			
		}
		return $eventArray;
	}
}
