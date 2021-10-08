<?php
declare(strict_types=1);

use Migrations\AbstractSeed;
use Cake\Datasource\ModelAwareTrait;
use Cake\ORM\Exception\PersistenceFailedException;
use CakeFest\Model\Table\CakeFestTable;

/**
 * CakeFest seed.
 * @property CakeFestTable $CakeFest
 */
class CakeFestSeed extends AbstractSeed
{
    use ModelAwareTrait;
    
    public function __construct()
    {
        $this->loadModel('CakeFest.CakeFest');
    }

    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'phrase' => 'Let them eat cake',
            ],
        ];

        $entities = $this->CakeFest->newEntities($data);
        try {
            $this->CakeFest->saveManyOrFail($entities);
        } catch (PersistenceFailedException $failedException) {
            echo $failedException->getMessage() . PHP_EOL;
        }
    }
}
