<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Posts seed.
 */
class PostsSeed extends AbstractSeed
{
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
                'title' => '初期値設定',
                'description' => '初期値設定',
                'body' => '初期値設定',
                'published' => true,
                'created' => '2020-12-15 17:00:00',
                'modified' => '2020-12-15 17:00:00',
            ],
            [
                'title' => '2番の値設定',
                'description' => '2番の値設定',
                'body' => '2番の値設定',
                'published' => true,
                'created' => '2020-12-15 17:00:00',
                'modified' => '2020-12-15 17:00:00',
            ],
            [
                'title' => '3番の値設定',
                'description' => '3番の値設定',
                'body' => '3番の値設定',
                'published' => true,
                'created' => '2020-12-15 17:00:00',
                'modified' => '2020-12-15 17:00:00',
            ],
            [
                'title' => '4番の値設定',
                'description' => '4番の値設定',
                'body' => '4番の値設定',
                'published' => true,
                'created' => '2020-12-15 17:00:00',
                'modified' => '2020-12-15 17:00:00',
            ]
        ];

        $table = $this->table('posts');
        $table->insert($data)->save();
    }
}
