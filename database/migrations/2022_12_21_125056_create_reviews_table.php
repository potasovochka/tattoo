<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->text('msg');
            $table->timestamps();
            /* Для отмены миграции необходимо указать:
               на один шаг назад - php artisan migrate:rollbakc
               на несколько шагов назад - php artisan migrate:rollbakc --step=3 (то есть на 3 шага)
               для обнуления всех шагов - php artisan migrate:reset
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
