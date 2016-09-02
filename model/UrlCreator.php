<?php
class UrlCreator{
	static function createUrl($eventName){
		$datetime = new DateTime();
		$now = $datetime -> format('Y-m-d H:i:s.u');
		$retval = hash('sha256', $eventName . $now);
		return $retval;
	}
}
