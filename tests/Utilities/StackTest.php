<?php
/**
 * Created by PhpStorm.
 * User: datdao
 * Date: 1/6/18
 * Time: 4:04 PM
 */

namespace app\Tests\Utilities;


use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testEmpty() {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack;
    }

    /**
     * @depends testEmpty
     * @param array $stack
     * @return array
     */
    public function testPush(array $stack) {
        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack) - 1]);
        $this->assertNotEmpty($stack);

        return $stack;
    }

    /**
     * @depends testPush
     * @param array $stack
     * @return array
     */
    public function testPop(array $stack) {
        $this->assertEquals('foo', array_pop($stack));
        $this->assertEmpty($stack);

        return $stack;
    }

}