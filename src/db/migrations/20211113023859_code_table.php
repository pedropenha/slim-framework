<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CodeTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $codes = $this->table('codigos');
        $codes->addColumn('codigo', 'string', ['limit' => 100]);
        $codes->addColumn('created_at', 'datetime'); // colocar sempre
        $codes->addColumn('updated_at', 'datetime');// colocar sempre
        $codes->create();
    }
}
