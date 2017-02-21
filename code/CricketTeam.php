<?php

class CricketTeam extends DataObject {

	private static $db = [
		'Name' => 'Varchar'
	];

	private static $has_many = [
		'Players' => 'CricketPlayer'
	];

}
