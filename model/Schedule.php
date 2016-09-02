<?php

class Schedule{
	private $scheduleId;
	private $eventUrl;
	private $candidateSchedule;
	private $displayName;
	private $evaluation;

	public function __construct($scheduleId, $eventUrl, $candidateSchedule, $displayName, $evaluation){
		$this -> scheduleId = $scheduleId;
		$this -> eventUrl = $eventUrl;
		$this -> candidateSchedule = $candidateSchedule;
		$this -> displayName = $displayName;
		$this -> evaluation= $evaluation;
	}
		
	public function getEventUrl(){
		return $eventUrl;
	}
	public function getCandidateSchedule(){
		return $candidateSchedule;
	}
	public function getDisplayName(){
		return $displayName;
	}
	public function getEvaluation(){
		return $evaluation;
	}
}
