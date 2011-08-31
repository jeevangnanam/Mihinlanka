<?php
/* Subscription Fixture generated on: 2011-06-05 19:09:29 : 1307290169 */
class SubscriptionFixture extends CakeTestFixture {
	var $name = 'Subscription';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => true, 'default' => 'Mr', 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fullname' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'address' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'phone_resident' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 18, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'phone_office' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 18, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'country_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'phone_resident' => array('column' => array('phone_resident', 'email'), 'unique' => 1), 'country_id' => array('column' => 'country_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'title' => 'Lorem ip',
			'fullname' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'phone_resident' => 'Lorem ipsum dolo',
			'phone_office' => 'Lorem ipsum dolo',
			'email' => 'Lorem ipsum dolor sit amet',
			'country_id' => 1
		),
	);
}
?>