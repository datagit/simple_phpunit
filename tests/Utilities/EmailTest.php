<?php
declare(strict_types=1);

namespace app\Tests\Utilities;
use PHPUnit\Framework\TestCase;
use src\Utilities\Email;

final class EmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress()
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress()
    {
        Email::fromString('invalid');
        $this->expectException(InvalidArgumentException::class);
    }

    public function testCanBeUsedAsString()
    {
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }
}