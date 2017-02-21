<?php

namespace Robbie\MeetupDemo\Extension;




use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataExtension;


class PageExtension extends DataExtension
{

    private static $db = array(
        'SomeField' => 'Varchar'
    );

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldToTab('Root.Main', TextField::create('SomeField'));
    }
}
