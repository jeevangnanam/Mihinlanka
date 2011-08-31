<?php

class ShoppingOrder extends AppModel {

    var $name = 'ShoppingOrder';
    var $validate = array(
        'name' => array('rule' => 'alphaNumeric', 'message' => 'Usernames must only contain letters and numbers.'),
        'email' => array('rule' => array('email',true), 'message' => 'Please use a valid email.'),
        'phone' => array('rule' => 'numeric', 'message' => 'Please use a valid phone number.'),
        'ticket_no' => array('rule' => 'alphaNumeric', 'message' => 'Please use a valid ticket  number.'),
    




        );

    function beforeValidate() {
  if (!empty($this->data)) {
    $this->data = $this->_cleanData($this->data);
  }
  return true;
}

function _cleanData($data) {
  $data['ShoppingOrder']['message'] = Sanitize::html(Sanitize::stripWhitespace($data['ShoppingOrder']['message']), array('remove' => true));
  $data['ShoppingOrder']['name'] = Sanitize::html(Sanitize::stripWhitespace($data['ShoppingOrder']['name']), array('remove' => true));
  $data['ShoppingOrder']['email'] = Sanitize::html(Sanitize::stripWhitespace($data['ShoppingOrder']['email']), array('remove' => true));
  $data['ShoppingOrder']['phone'] = Sanitize::html(Sanitize::stripWhitespace($data['ShoppingOrder']['phone']), array('remove' => true));
  $data['ShoppingOrder']['ticket_no'] = Sanitize::html(Sanitize::stripWhitespace($data['ShoppingOrder']['ticket_no']), array('remove' => true));
  return $data;
}
}

?>