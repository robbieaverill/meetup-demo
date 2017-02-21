<?php

namespace Robbie\MeetupDemo\Task;


use SilverStripe\Dev\BuildTask;


class DoesNothingTask extends BuildTask
{

    protected $title = 'Does Nothing Task';

    protected $description = 'This task literally does nothing.';

    public function run($request)
    {
        echo 'Well, technically it did something.', PHP_EOL;
    }
}
