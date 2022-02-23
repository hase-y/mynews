<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     // nameとgender、hobby、intoroductionを追加
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name'); // プロフィールの名前を保存するカラム
            $table->string('gender');  // プロフィールの性別を保存するカラム
            $table->string('hobby'); // プロフィールの趣味を保存するカラム
            $table->string('introduction');  // プロフィールの自己紹介を保存するカラム
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile');
    }
}
