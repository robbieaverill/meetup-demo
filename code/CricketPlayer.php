<?php

class CricketPlayer extends DataObject {

	private static $db = [
		'Name' => 'Varchar',
		'Birthday' => 'SS_Datetime'
	];

	private static $has_one = [
		'Team' => 'CricketTeam'
	];

}
