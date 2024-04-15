<?php

use HogeCompany\FooProject\Calc;
use PHPUnit\Framework\TestCase;

class CalcTest extends TestCase {
    public function testAdd() {
        $calc = new Calc();
        $result = $calc->add(1, 2);

        // $this->assertEquals(3, $result);
        $this->assertEquals(5, $result); // fail
    }
}