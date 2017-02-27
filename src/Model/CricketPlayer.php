<?php

namespace Robbie\MeetupDemo\Model;

use Robbie\MeetupDemo\Model\CricketTeam;
use SilverStripe\ORM\DataObject;

class CricketPlayer extends DataObject
{
    private static $table_name = 'CricketPlayer';

    private static $db = array(
        'Name' => 'Varchar',
        'Birthday' => 'DBDatetime'
    );

    private static $has_one = array(
        'Team' => CricketTeam::class
    );
}
