<?php
/**
 * Created by PhpStorm.
 * User: datdao
 * Date: 1/6/18
 * Time: 4:18 PM
 */
declare(strict_types=1);

namespace app\Tests\Utilities;


use PHPUnit\Framework\TestCase;

class DataTest extends TestCase
{

    /**
     * @dataProvider additionProvider
     * @param int $a
     * @param int $b
     * @param int $expected
     */
    public function testAdd(int $a, int $b, int $expected) {
        $this->assertEquals($expected, ($a + $b));
    }

    public function additionProvider() {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 1, 2],
            [1, 2, 3],
            [3, 3, 3],
        ];
    }
}