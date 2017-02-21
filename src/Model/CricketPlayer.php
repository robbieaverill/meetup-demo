<?php

namespace Robbie\MeetupDemo\Model;

use DataObject;

class CricketPlayer extends DataObject
{

    private static $db = array(
        'Name' => 'Varchar',
        'Birthday' => 'SS_Datetime'
    );

    private static $has_one = array(
        'Team' => 'CricketTeam'
    );
}
