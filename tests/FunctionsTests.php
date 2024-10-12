<?php
use PHPUnit\Framework\TestCase;

class FunctionsTests extends TestCase {
    public function testAdd() {
        $this->assertEquals(3, add(1, 2));
        $this->assertEquals(10, add(5, 5));
    }
}