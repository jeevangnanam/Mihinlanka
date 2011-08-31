<?php
/* SurveyUser Fixture generated on: 2011-05-23 11:45:45 : 1306140345 */
class SurveyUserFixture extends CakeTestFixture {
	var $name = 'SurveyUser';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'country_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'age_group' => array('type' => 'string', 'null' => false, 'default' => '26-34', 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'profession' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'country_id' => array('column' => 'country_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'country_id' => 1,
			'age_group' => 'Lorem ipsum dolor sit amet',
			'profession' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>