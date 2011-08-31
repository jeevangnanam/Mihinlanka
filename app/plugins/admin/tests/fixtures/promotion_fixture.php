<?php
/* Promotion Fixture generated on: 2011-05-03 12:59:57 : 1304416797 */
class PromotionFixture extends CakeTestFixture {
	var $name = 'Promotion';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'from' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'to' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'fare' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fare_in_number' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'currency_id' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 2, 'key' => 'index'),
		'conditions' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fare_details_short' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 250, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'from' => array('column' => 'from', 'unique' => 0), 'to' => array('column' => 'to', 'unique' => 0), 'currency_id' => array('column' => 'currency_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'from' => 1,
			'to' => 1,
			'fare' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'fare_in_number' => 1,
			'currency_id' => 1,
			'conditions' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'fare_details_short' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>