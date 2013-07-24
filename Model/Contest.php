<?php
App::uses('AppModel', 'Model');
/**
 * Contest Model
 *
 */
class Contest extends AppModel {

/**
 * Display field
 *
 * @var string
 */
  public $displayField = 'maintext';

/**
 * Validation rules
 *
 * @var array
 */
  public $validate = array(
    'maintext' => array(
      'notempty' => array(
        'rule' => array('notempty'),
        //'message' => 'Your custom message here',
        //'allowEmpty' => false,
        //'required' => false,
        //'last' => false, // Stop validation after this rule
        //'on' => 'create', // Limit validation to 'create' or 'update' operations
      ),
    ),
    'image' => array(
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
