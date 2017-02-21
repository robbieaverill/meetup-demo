<?php

class PageExtension extends DataExtension {

	private static $db = [
		'SomeField' => 'Varchar'
	];

	public function updateCMSFields(FieldList $fields) {
		$fields->addFieldToTab('Root.Main', TextField::create('SomeField'));
	}

}
