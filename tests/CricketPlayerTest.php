<?php

namespace Robbie\MeetupDemo\Test;

use Robbie\MeetupDemo\Model\CricketPlayer;
use Robbie\MeetupDemo\Model\CricketTeam;
use SilverStripe\Core\Injector\Injector;
use SilverStripe\Dev\SapphireTest;

class CricketPlayerTest extends SapphireTest
{
    protected $usesDatabase = true;

    public function testCanAddPlayerToTeam()
    {
        // Not using a fixture just to keep it on one screen
        $player = new CricketPlayer(array('Name' => 'Jonty'));
        $player->write();
        $team = new CricketTeam(array('Name' => 'Kings'));
        $team->write();

        $team->Players()->add($player);

        $player = CricketPlayer::get()->byId($player->ID);
        $this->assertSame('Kings', $player->Team()->Name);
    }

    public function testInjectorAliasWorks()
    {
        $this->assertInstanceOf(CricketPlayer::class, Injector::inst()->get('Player'));
    }
}
