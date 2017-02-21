<?php

namespace Robbie\MeetupDemo\Extension;

use DataExtension;
use FieldList;
use TextField;


class PageExtension extends DataExtension {

	private static $db = array(
		'SomeField' => 'Varchar'
	);

	public function updateCMSFields(FieldList $fields) {
		$fields->addFieldToTab('Root.Main', TextField::create('SomeField'));
	}

}
