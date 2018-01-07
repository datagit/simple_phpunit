<?php
/**
 * Created by PhpStorm.
 * User: datdao
 * Date: 1/6/18
 * Time: 5:09 PM
 */

namespace app\Tests\Utilities;


use PHPUnit\Framework\TestCase;
use src\Utilities\User;
use src\Utilities\UserException;

class ExceptionTest extends TestCase
{
    public static  $User;
    public static function setUpBeforeClass() {
        self::$User = new User();
    }

    public static function tearDownAfterClass()
    {
        self::$User = null;
    }

    public function testException()
    {
        $this->expectException(UserException::class);
//        throw new UserException("Invalid user");
        self::$User->throwMyException();
    }
}