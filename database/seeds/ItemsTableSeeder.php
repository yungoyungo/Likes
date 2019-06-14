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
    }
}
