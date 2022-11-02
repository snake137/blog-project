<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->string('name')
                ->comment('Название поста');

            $table->text('description')
                ->nullable()
                ->comment('Описание поста');

            $table->text('text')
                ->comment('Текст поста');

            $table->integer('views')
                ->comment('Количество просмотров');

            $table->integer('category_id')
                ->comment('id категории');

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
        Schema::dropIfExists('posts');
    }
}
