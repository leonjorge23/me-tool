<?php
App::uses('AppModel', 'Model');
/**
 * CouplesWeekend Model
 *
 * @property Couple $Couple
 * @property Weekend $Weekend
 */
class CouplesWeekend extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'weekend_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'team' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'role' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Couple' => array(
			'className' => 'Couple',
			'foreignKey' => 'couple_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Weekend' => array(
			'className' => 'Weekend',
			'foreignKey' => 'weekend_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
        public $actsAs = array('Search.Searchable');
        
        public $filterArgs = array(
           'team' => array(
           'type' => 'like',
           'encode' => true,
           'before' => false,
           'after' => false,
           'wildcardAny' => '%', 'wildcardOne' => '_'
            )
        );        
}
