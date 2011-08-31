<?php
/* Destination Fixture generated on: 2011-05-03 16:52:34 : 1304430754 */
class DestinationFixture extends CakeTestFixture {
	var $name = 'Destination';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'code' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 3, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'place' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 250, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'country_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'order' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'country_id' => array('column' => 'country_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'code' => 'L',
			'place' => 'Lorem ipsum dolor sit amet',
			'country_id' => 1,
			'order' => 1
		),
	);
}
?>