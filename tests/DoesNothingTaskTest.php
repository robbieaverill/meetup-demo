<?php

namespace Robbie\MeetupDemo\Test;

use Robbie\MeetupDemo\Task\DoesNothingTask;
use SilverStripe\Control\HTTPRequest;
use SilverStripe\Dev\SapphireTest;

class DoesNothingTaskTest extends SapphireTest
{
    public function testTitleAndDescription()
    {
        $task = new DoesNothingTask;

        $this->assertContains('Does Nothing', $task->getTitle());
        $this->assertContains('literally does nothing.', $task->getDescription());
    }

    public function testActuallyDoesntLiterallyDoNothing()
    {
        $task = new DoesNothingTask;

        // Tasks output directly, so we have to buffer the output to test it
        $buffer = ob_start();
        $task->run(new HTTPRequest('GET', '/'));
        $result = ob_get_clean();

        $this->assertContains('technically it did something', $result);
    }
}
