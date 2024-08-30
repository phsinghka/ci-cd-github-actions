<?php
use PHPUnit\Framework\TestCase;

require_once 'src/lib/some-logic.php';

class SomeLogicTest extends TestCase {
    public function testDoSomething() {
        $result = do_something();
        $this->assertEquals("Doing something!", $result);
    }
}

