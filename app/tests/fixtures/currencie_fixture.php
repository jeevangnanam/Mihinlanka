<?php
/* Currencie Fixture generated on: 2011-04-08 18:29:00 : 1302276540 */
class CurrencieFixture extends CakeTestFixture {
	var $name = 'Currencie';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'code' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 5, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'symbol' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 5, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'country' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'country' => array('column' => 'country', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'code' => 'Lor',
			'symbol' => 'Lor',
			'country' => 1
		),
	);
}
?>