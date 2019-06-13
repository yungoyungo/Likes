<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->delete();
 
        App\Item::create([
            'title' => 'sample_item',
            'image_path' => 'http://sample.sample.png',
            'user_id' => '1',
        ]);
        App\Item::create([
            'title' => 'フィードバックファイル',
            'image_path' => 'http://sample.sample.png',
            'user_id' => '2',
        ]);
        App\Item::create([
            'title' => 'サーフ ブンガク カマクラ',
            'image_path' => 'http://sample.sample.png',
            'user_id' => '2',
        ]);
    }
}
