<?php

namespace Robbie\MeetupDemo\Model;

use Robbie\MeetupDemo\Model\CricketPlayer;
use SilverStripe\ORM\DataObject;

class CricketTeam extends DataObject
{
    private static $table_name = 'CricketTeam';

    private static $db = [
        'Name' => 'Varchar'
    ];

    private static $has_many = [
        'Players' => CricketPlayer::class
    ];
}
