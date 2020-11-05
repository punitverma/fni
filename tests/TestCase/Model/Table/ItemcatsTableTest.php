<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ItemcatsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ItemcatsTable Test Case
 */
class ItemcatsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ItemcatsTable
     */
    protected $Itemcats;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Itemcats',
        'app.Items',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Itemcats') ? [] : ['className' => ItemcatsTable::class];
        $this->Itemcats = TableRegistry::getTableLocator()->get('Itemcats', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Itemcats);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
