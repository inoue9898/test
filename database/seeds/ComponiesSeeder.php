<?php

use Illuminate\Database\Seeder;

class ComponiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('componies')->insert([
            [
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null,
                'name' => 'コカコーラ',
                'company' => 'コカコーラ',
            ],
            [
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null,
                'name' => 'スーパードライ',
                'company' => 'アサヒ',
            ],
            [
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null,
                'name' => 'キレートレモン',
                'company' => 'サントリー',
            ],
            [
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null,
                'name' => '濃い茶',
                'company' => '伊藤園',
            ],

        ]);
    }
}
