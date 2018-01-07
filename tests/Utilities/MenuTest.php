<?php
/**
 * Created by PhpStorm.
 * User: datdao
 * Date: 1/7/18
 * Time: 3:26 PM
 */

namespace app\Tests\Utilities;


use PHPUnit\Framework\TestCase;
use src\Utilities\ConfigMenu;
use src\Utilities\Menu;

class MenuTest extends TestCase
{
    private $_menu;
    public function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->_menu = new Menu();
    }

    public function tearDown()
    {
        parent::tearDown(); // TODO: Change the autogenerated stub
        unset($this->_menu);
    }

    public function testCreate() {
        $config = new ConfigMenu();
        $config->title = "my title";
        $config->body = "my body";

        $result = $this->_menu->create($config);
        $this->assertRegexp('/my title/', $result);
    }
}