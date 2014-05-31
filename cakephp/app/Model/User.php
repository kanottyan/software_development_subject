<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property TimeEnd $TimeEnd
 * @property TimeStart $TimeStart
 */
class User extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */

	public $name = 'User';

	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'gender' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'grade' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'TimeEnd' => array(
			'className' => 'TimeEnd',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => 'TimeEnd.end',
			'order' => 'created DESC',
			'limit' => '1',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'TimeStart' => array(
			'className' => 'TimeStart',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => 'TimeStart.start',
			'order' => 'created DESC',
			'limit' => '1',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

	public function getUsersNameSrattEnd(){
		$result = $this->find('all',array(
            'conditions' => array(
            ),
            'fields' => array(
                'User.id','User.name',
            ),
            'recursive' => '0',
		));
		return $result;
	}



/*joinsしてもうまく他テーブルが取得できない??
	public function getUsers(){
		$result = $this->find('all',array(
            'conditions' => array(
                'User.id' => 1,
                //'User.id' => 0,
                //'TimeStart.id' => 0,
            ),
            'fields' => array(
                'User.id','User.name',
            ),
            'recursive' => '0',
		));
		return $result;
	}
*/
}
