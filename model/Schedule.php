<?php

class Schedule{
	private $scheduleId;
	private $eventUrl;
	private $candidateSchedule;
	private $displayName;
	private $evaluation;
	private $comment;

	public function __construct($scheduleId, $eventUrl, $candidateSchedule, $displayName, $evaluation, $comment){
		$this -> scheduleId = $scheduleId;
		$this -> eventUrl = $eventUrl;
		$this -> candidateSchedule = $candidateSchedule;
		$this -> displayName = $displayName;
		$this -> evaluation= $evaluation;
		$this -> comment = $comment;
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
	public function getComment(){
		return $comment;
	}
}
