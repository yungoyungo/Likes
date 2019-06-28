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
 
        // App\Item::create([
        //     'title' => 'sample_item',
        //     'image_path' => '',
        //     'user_id' => '1',
        // ]);
        // App\Item::create([
        //     'title' => '君という花',
        //     'image_path' => 'sample/君という花.jpg',
        //     'user_id' => '2',
        // ]);
        // App\Item::create([
        //     'title' => 'リライト',
        //     'image_path' => 'sample/リライト.jpg',
        //     'user_id' => '2',
        // ]);
        // App\Item::create([
        //     'title' => 'フィードバックファイル2',
        //     'image_path' => 'sample/フィードバックファイル2.jpg',
        //     'user_id' => '2',
        // ]);
        // App\Item::create([
        //     'title' => '藤沢ルーザー',
        //     'image_path' => 'sample/藤沢ルーザー.jpg',
        //     'user_id' => '2',
        // ]);
        // App\Item::create([
        //     'title' => 'ホームタウン',
        //     'image_path' => 'sample/ホームタウン.jpg',
        //     'user_id' => '2',
        // ]);
        // App\Item::create([
        //     'title' => 'ループ&ループ',
        //     'image_path' => 'sample/ループ&ループ.jpg',
        //     'user_id' => '2',
        // ]);
        // App\Item::create([
        //     'title' => '今を生きて',
        //     'image_path' => 'sample/今を生きて.jpg',
        //     'user_id' => '2',
        // ]);
        App\Item::create([
            'title' => '荒野を歩け',
            'image_path' => 'item_images/sample/荒野を歩け.jpg',
            'user_id' => '2',
        ]);
        App\Item::create([
            'title' => 'dororo/解放区',
            'image_path' => 'item_images/sample/dororo:解放区.jpg',
            'user_id' => '2',
        ]);
        // App\Item::create([
        //     'title' => 'ブラッドサーキュレーター',
        //     'image_path' => 'item_images/sample/ブラッドサーキュレーター.jpg',
        //     'user_id' => '2',
        // ]);
        App\Item::create([
            'title' => 'ソルファ',
            'image_path' => 'item_images/sample/ソルファ.jpg',
            'user_id' => '2',
        ]);
        App\Item::create([
            'title' => '四畳半神話大系',
            'image_path' => 'item_images/sample/4jo-han.jpeg',
            'user_id' => '3',
        ]);
        App\Item::create([
            'title' => 'andymori',
            'image_path' => 'sample/andymori.jpg',
            'user_id' => '3',
        ]);
        App\Item::create([
            'title' => 'エウレカセブン',
            'image_path' => 'sample/eureka.jpg',
            'user_id' => '3',
        ]);
        App\Item::create([
            'title' => 'GranTurismo',
            'image_path' => 'sample/Gran_turismo_logo.png',
            'user_id' => '3',
        ]);
        App\Item::create([
            'title' => 'ミニ',
            'image_path' => 'sample/mini.jpg',
            'user_id' => '3',
        ]);
        App\Item::create([
            'title' => 'マインクラフト',
            'image_path' => 'sample/minecraft.jpeg',
            'user_id' => '3',
        ]);
        App\Item::create([
            'title' => 'ソニックアドベンチャー2',
            'image_path' => 'sample/SA2_logo.png',
            'user_id' => '3',
        ]);
        App\Item::create([
            'title' => 'Grand Theft Auto V',
            'image_path' => 'sample/grand-theft-auto-v-logo.png',
            'user_id' => '3',
        ]);
        App\Item::create([
            'title' => 'ももいろクローバーZ',
            'image_path' => 'sample/The_Diamond_Four.png',
            'user_id' => '3',
        ]);
    }
}
