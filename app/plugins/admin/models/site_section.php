<?php
class SiteSection extends AdminAppModel {
	var $name = 'SiteSection';
	var $displayField = 'section_name';
	var $validate = array(
		'section_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
?>