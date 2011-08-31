<?php
/* ShoppingOrder Fixture generated on: 2011-05-07 21:55:04 : 1304794504 */
class ShoppingOrderFixture extends CakeTestFixture {
	var $name = 'ShoppingOrder';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'phone' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ticket_no' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'flight_date' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'order_date' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'quantity' => array('type' => 'integer', 'null' => true, 'default' => '1'),
		'message' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'phone' => 'Lorem ipsum dolor ',
			'ticket_no' => 'Lorem ipsum dolor sit amet',
			'flight_date' => '2011-05-07 21:55:04',
			'order_date' => '1304794504',
			'quantity' => 1,
			'message' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>