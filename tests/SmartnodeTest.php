<?php
/**
 * Tests for SmartNode
 */

use PHPUnit\Framework\TestCase;
use Smartnode\Smartnode;

class SmartnodeTest extends TestCase {
    private Smartnode $instance;

    protected function setUp(): void {
        $this->instance = new Smartnode(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Smartnode::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
