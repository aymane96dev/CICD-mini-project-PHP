<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/functions.php'; 

class FunctionsTests extends TestCase {
    public function testAdd() {
        $this->assertEquals(3, add(1, 2));
        $this->assertEquals(10, add(5, 5));
    }
}