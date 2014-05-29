<?php
App::uses('TimeStart', 'Model');

/**
 * TimeStart Test Case
 *
 */
class TimeStartTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.time_start',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TimeStart = ClassRegistry::init('TimeStart');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TimeStart);

		parent::tearDown();
	}

}
