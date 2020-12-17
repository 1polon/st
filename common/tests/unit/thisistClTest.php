<?php

namespace common\tests;

use common\models\User;

class ExampleTest extends \Codeception\Test\Unit
{
    /**
     * @var \common\tests\UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        echo 'asdf';
        $user = new User();
        $user->username = 'dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd';
        $this->assertFalse($user->validate(['username']));
        $this->assertTrue($user->validate(['username']));
        $user->grabColumnFromDatabase('users', 'email', array('name' => 'RebOOter'));
    }
}