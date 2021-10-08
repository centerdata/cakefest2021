<?php
declare(strict_types=1);

namespace CakeFest\Test\TestCase\Command;

use CakeFest\Command\CakeFestCommand;
use Cake\TestSuite\ConsoleIntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * CakeFest\Command\CakeFestCommand Test Case
 *
 * @uses \CakeFest\Command\CakeFestCommand
 */
class CakeFestCommandTest extends TestCase
{
    use ConsoleIntegrationTestTrait;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->useCommandRunner();
    }
    /**
     * Test buildOptionParser method
     *
     * @return void
     * @uses \CakeFest\Command\CakeFestCommand::buildOptionParser()
     */
    public function testBuildOptionParser(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test execute method
     *
     * @return void
     * @uses \CakeFest\Command\CakeFestCommand::execute()
     */
    public function testExecute(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
