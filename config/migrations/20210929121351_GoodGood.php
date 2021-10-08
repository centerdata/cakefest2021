<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class GoodGood extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Good good migrations, Beach Boys
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $this->table('cake_fest')
            ->addColumn('phrase', 'string', [
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => 'CURRENT_TIMESTAMP',
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'null' => true,
            ])
            ->addColumn('deleted', 'datetime', [
                'default' => null,
                'null' => true,
            ])
            ->create();
    }
}
