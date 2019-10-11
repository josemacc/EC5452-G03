<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->string('title');
            $table->longtext('description');
            $table->longtext('about_instructor');
            $table->double('discount_price', 10, 2);
            $table->double('actual_price', 10, 2);
            $table->string('playlist_url');
            $table->integer('view_count')->default(0);
            $table->integer('subscriber_count')->default(0);
            $table->integer('status')->default(0); //live: 1, not live: 0
            $table->string('photo')->nullable();
            $table->softDeletes(); //elimina pero para los demás, admin puede ver
            $table->timestamps(); // fecha de creacion fecha de actualizacion
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
