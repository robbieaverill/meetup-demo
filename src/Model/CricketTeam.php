<?php

namespace Robbie\MeetupDemo\Model;


use Robbie\MeetupDemo\Model\CricketPlayer;
use SilverStripe\ORM\DataObject;


class CricketTeam extends DataObject
{

    private static $db = array(
        'Name' => 'Varchar'
    );

    private static $has_many = array(
        'Players' => CricketPlayer::class
    );
}
