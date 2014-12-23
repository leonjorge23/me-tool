<?php
App::uses('AppModel', 'Model');
/**
 * Couple Model
 *
 * @property Weekend $Weekend
 */
class Couple extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'last_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'his_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'her_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'last_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Weekend' => array(
			'className' => 'Weekend',
			'joinTable' => 'couples_weekends',
			'foreignKey' => 'couple_id',
			'associationForeignKey' => 'weekend_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);
        
        public $actsAs = array('Search.Searchable');
        
        public $filterArgs = array(
           'his_name' => array(
           'type' => 'like',
           'encode' => true,
           'before' => false,
           'after' => false,
           'wildcardAny' => '%', 'wildcardOne' => '_'
            ),
           'her_name' => array(
           'type' => 'like',
           'encode' => true,
           'before' => false,
           'after' => false,
           'wildcardAny' => '%', 'wildcardOne' => '_'
            ),
            'last_name' => array(
           'type' => 'like',
           'encode' => true,
           'before' => false,
           'after' => false,
           'wildcardAny' => '%', 'wildcardOne' => '_'
            )
        );

}
