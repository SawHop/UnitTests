<?php

class UserMegaTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

//    protected function _before()
//    {
//    }
//
//    protected function _after()
//    {
//    }

    public function _fixtures()
    {
        return ['new' => \app\tests\fixtures\NewFixture::className()];
    }

    // tests
    public function testSomeFeature()
    {
        $user123 = $this->tester->grabFixture('new', 'new1');
//        var_dump($user123);
        expect($user123->getTitle())->equals('test');
    }
}