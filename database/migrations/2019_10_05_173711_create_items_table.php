<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->integer('course_id');
            $table->integer('view_count')->default(0);
            $table->string('url')->nullable();
            $table->longtext('description')->nullable();
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
        Schema::dropIfExists('items');
    }
}
