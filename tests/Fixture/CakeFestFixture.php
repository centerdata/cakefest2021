<?php
declare(strict_types=1);

namespace CakeFest\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CakeFestFixture
 */
class CakeFestFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'cake_fest';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'phrase' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => 'current_timestamp()', 'comment' => ''],
        'modified' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        'deleted' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'phrase' => 'Lorem ipsum dolor sit amet',
                'created' => '2021-10-08 16:39:35',
                'modified' => '2021-10-08 16:39:35',
                'deleted' => '2021-10-08 16:39:35',
            ],
        ];
        parent::init();
    }
}
