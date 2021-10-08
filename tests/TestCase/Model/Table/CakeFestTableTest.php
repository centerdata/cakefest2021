<?php
declare(strict_types=1);

namespace CakeFest\Test\TestCase\Model\Table;

use CakeFest\Model\Table\CakeFestTable;
use Cake\TestSuite\TestCase;

/**
 * CakeFest\Model\Table\CakeFestTable Test Case
 */
class CakeFestTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \CakeFest\Model\Table\CakeFestTable
     */
    protected $CakeFest;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'plugin.CakeFest.CakeFest',
        'plugin.CakeFest.Phinxlog',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('CakeFest') ? [] : ['className' => CakeFestTable::class];
        $this->CakeFest = $this->getTableLocator()->get('CakeFest', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->CakeFest);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \CakeFest\Model\Table\CakeFestTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
