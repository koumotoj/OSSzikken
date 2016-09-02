<?php

class Event{
	private $eventUrl;
	private $eventName;
	private $memo;
	private $candidateSchedule;
	private $registrationDate;

	public function __construct($eventUrl, $eventName, $memo, $candidateSchedule, $registrationDate){
		$this -> eventUrl = $eventUrl;
		$this -> eventName = $eventName;
		$this -> memo = $memo;
		$this -> candidateSchedule = $candidateSchedule;
		$this -> registrationDate = $registrationDate;
	}

	public function getEventUrl(){
		return $eventUrl;
	}
	public function getEventName(){
		return $eventName;
	}
	public function getMemo(){
		return $memo;
	}
	public function getCandidateSchedule(){
		return $candidateSchedule;
	}
	public function getRegistrationDate(){
		return $registrationDate;
	}
}
