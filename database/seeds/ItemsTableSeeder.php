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
            'image_path' => '',
            'user_id' => '1',
        ]);
        App\Item::create([
            'title' => '君という花',
            'image_path' => 'sample/君という花.jpg',
            'user_id' => '2',
        ]);
        App\Item::create([
            'title' => 'リライト',
            'image_path' => 'sample/リライト.jpg',
            'user_id' => '2',
        ]);
        App\Item::create([
            'title' => 'フィードバックファイル2',
            'image_path' => 'sample/フィードバックファイル2.jpg',
            'user_id' => '2',
        ]);
        App\Item::create([
            'title' => '藤沢ルーザー',
            'image_path' => 'sample/藤沢ルーザー.jpg',
            'user_id' => '2',
        ]);
        App\Item::create([
            'title' => 'ホームタウン',
            'image_path' => 'sample/ホームタウン.jpg',
            'user_id' => '2',
        ]);
        App\Item::create([
            'title' => 'ループ&ループ',
            'image_path' => 'sample/ループ&ループ.jpg',
            'user_id' => '2',
        ]);
        App\Item::create([
            'title' => '今を生きて',
            'image_path' => 'sample/今を生きて.jpg',
            'user_id' => '2',
        ]);
        App\Item::create([
            'title' => '荒野を歩け',
            'image_path' => 'sample/荒野を歩け.jpg',
            'user_id' => '2',
        ]);
        App\Item::create([
            'title' => 'dororo/解放区',
            'image_path' => 'sample/dororo:解放区.jpg',
            'user_id' => '2',
        ]);
        App\Item::create([
            'title' => 'ブラッドサーキュレーター',
            'image_path' => 'sample/ブラッドサーキュレーター.jpg',
            'user_id' => '2',
        ]);
    }
}
