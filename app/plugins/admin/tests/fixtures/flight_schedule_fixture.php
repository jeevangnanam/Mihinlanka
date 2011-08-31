<?php
/* FlightSchedule Fixture generated on: 2011-05-04 19:02:25 : 1304524945 */
class FlightScheduleFixture extends CakeTestFixture {
	var $name = 'FlightSchedule';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'flight_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'departure_destination_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'departure_terminal_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'departure_time' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'arrival_destination_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'arrival_terminal_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'arrival_time' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'frequency' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'period' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'stops' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'route_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'flight_id' => array('column' => 'flight_id', 'unique' => 0), 'departure_destination_id' => array('column' => 'departure_destination_id', 'unique' => 0), 'departure_terminal_id' => array('column' => 'departure_terminal_id', 'unique' => 0), 'arrival_destination_id' => array('column' => 'arrival_destination_id', 'unique' => 0), 'arrival_terminal_id' => array('column' => 'arrival_terminal_id', 'unique' => 0), 'arrival_terminal_id_2' => array('column' => 'arrival_terminal_id', 'unique' => 0), 'route_id' => array('column' => 'route_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'flight_id' => 1,
			'departure_destination_id' => 1,
			'departure_terminal_id' => 1,
			'departure_time' => 'Lorem ip',
			'arrival_destination_id' => 1,
			'arrival_terminal_id' => 1,
			'arrival_time' => 'Lorem ip',
			'frequency' => 'Lorem ipsum dolor sit amet',
			'period' => 'Lorem ipsum dolor sit amet',
			'stops' => 1,
			'route_id' => 1
		),
	);
}
?>