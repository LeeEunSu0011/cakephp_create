<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        //Migrationsを作る　bin/cake bake migrations ファイル名
        //テーブル名
        $table = $this->table('users');
        //テーブルの中身を作成
        $table
            ->addColumn('username', 'string', ['default' => null, 'limit' => 50, 'null' => false])
            ->addColumn('password', 'string', ['default' => null, 'limit' => 150, 'null' => false])
            ->addColumn('created', 'datetime')
            ->addColumn('modified','datetime')
            ->create();
    }
}
