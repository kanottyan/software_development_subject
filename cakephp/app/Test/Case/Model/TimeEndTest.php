<?php
App::uses('TimeEnd', 'Model');

/**
 * TimeEnd Test Case
 *
 */
class TimeEndTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.time_end',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TimeEnd = ClassRegistry::init('TimeEnd');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TimeEnd);

		parent::tearDown();
	}

}
