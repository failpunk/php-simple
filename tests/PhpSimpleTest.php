<?php

require_once __DIR__ . '/../src/PhpSimple/PhpSimple.php';

class PhpSimpleTest extends PHPUnit_Framework_testCase
{
  public function testOne()
  {
    $arr = [
        'one' => 1,
        'two' => 2,
        'three' => 3
    ];

    $result = pick($arr, ['two']);

    $this->assertTrue(true);
  }
}