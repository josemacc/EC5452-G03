<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('category_id')->nullable();
            $table->integer('course_id')->nullable();
            $table->double('amount', 10, 2);
            $table->tinyInteger('status')->default('started_payment');
            $table->string('mode_of_payment')->nullable();//card, cash, online 
            $table->string('payment_processor')->nullable();//paypal, etc. 
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
        //
    }
}
