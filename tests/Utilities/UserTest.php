<?php
/**
 * Created by PhpStorm.
 * User: datdao
 * Date: 1/6/18
 * Time: 5:09 PM
 */

namespace app\Tests\Utilities;


use PHPUnit\Framework\TestCase;
use src\Utilities\PHPUnitUtil;
use src\Utilities\User;
use src\Utilities\UserException;

class UserTest extends TestCase
{
    private  $user;
    public function setUp() {
        $this->user = new User(10, "The name", new \DateTime());
    }

    public function tearDown()
    {
        $this->user = null;
    }

    public function testNewInstance()
    {
        $this->expectException(UserException::class);
        $this->user->throwMyException();
    }

    public function testId() {
        $this->assertEquals(10, $this->user->getId());
    }

    public function testPrivateMethodAdd() {
        $returnVal = PHPUnitUtil::callMethod(
            $this->user,
            '_add',
            array(0, 1)
        );
        $this->assertEquals(1, $returnVal);
    }


}