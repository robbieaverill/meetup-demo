<?php

namespace Robbie\MeetupDemo\Model;

use DataObject;

class CricketTeam extends DataObject
{

    private static $db = array(
        'Name' => 'Varchar'
    );

    private static $has_many = array(
        'Players' => 'CricketPlayer'
    );
}
