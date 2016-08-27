create database choseikun;


CREATE TABLE schedule(
	schedule_id INTEGER PRIMARY KEY AUTO_INCREMENT,
	event_url VARCHAR(128) NOT NULL,
	candidate_schedule TEXT ,
	display_name TEXT,
	evaluation INTEGER NOT NULL
);

CREATE TABLE event(
	event_url VARCHAR(128) PRIMARY KEY,
	event_name TEXT NOT NULL,
	memo TEXT,
	candidate_schedule TEXT NOT NULL,
	registration_date DATE NOT NULL
);
