<?php
App::uses('AppModel', 'Model');
/**
 * Event Model
 *
 */
class Event extends AppModel {

/**
 * Display field
 *
 * @var string
 */
  public $displayField = 'maintext';

  public $order = "sort_order ASC";

  public $actsAs = array(
    'Uploader.FileValidation' => array(
      'image' => array(
        'extension' => array('gif', 'jpg', 'png', 'jpeg'),
        'required' => true,
        'maxWidth' => 600,
        'minWidth' => 600,
        'maxHeight' => 960,
        'minHeight' => 960,
      )
    ),
    'Uploader.Attachment' => array(
      'image' => array(
        'uploadDir' => '../../uploads'
      )
    )
  );

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
  );
}
