<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNullableItemTableImagePathColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            // image_pathをstringからtextに変更
            $table->text('image_path')->change();
            
            // image_pathカラムにNULLを許容
            $table->text('image_path')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            // 既にテーブルの対象カラムにNULLを登録している場合
            DB::statement('UPDATE `items` SET `image_path` = "image not exist" WHERE `image_path` IS NULL');
            // noteカラムにNULLを許容しない
            $table->text('image_path')->nullable(false)->change();

            // textからstringへ
            $table->string('image_path', 255)->change();
        });
    }
}
