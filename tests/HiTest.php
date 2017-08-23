<?php
namespace SimplePhpUnitExample\Tests;
use SimplePhpUnitExample\Hi;
use PHPUnit_Framework_TestCase;
class HiTest extends PHPUnit_Framework_TestCase {
  private $hi;
  /**
   * @test
   * @return void
   */ 
  public function setUp() {
    $this->hi = new Hi();
  }
  /**
   * @test
   * @return void
   */
  public function itYourName() {
    $name = 'Name';
    $expected = 'Hi ' . $name;
    $actual = $this->hi->yourName($name);
    $this->assertEquals($expected, $actual);
  }
}
