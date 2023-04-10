<?php

use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null,
                'name' => 'コカコーラ',
                'kakaku' => '150',
                'zaiko' => '50',
                'company' => 'コカコーラ',
                'syousai' => '世界中で愛されている飲み物です。',
            ],
            [
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null,
                'name' => 'スーパードライ',
                'kakaku' => '250',
                'zaiko' => '50',
                'company' => 'アサヒ',
                'syousai' => '仕事終わりの一杯はたまらなく美味しいです。',
            ],
            [
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null,
                'name' => 'キレートレモン',
                'kakaku' => '160',
                'zaiko' => '25',
                'company' => 'サントリー',
                'syousai' => '疲れた体にビタミンC。',
            ],
            [
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => null,
                'name' => '濃い茶',
                'kakaku' => '140',
                'zaiko' => '40',
                'company' => '伊藤園',
                'syousai' => '日本人大好きお茶です。',
            ],

        ]);
    }
}
