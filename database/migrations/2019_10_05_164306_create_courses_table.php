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

            //create course
            $table->integer('category_id');
            $table->string('title');
            $table->string('sub_title')->nullable();
            $table->longtext('description');
            $table->longtext('about_instructor')->nullable();
            $table->string('playlist_url');
            $table->string('tags')->nullable();//php,laravel,html
            $table->string('photo')->nullable();
            $table->string('promo_video_url')->nullable();
            $table->integer('creator_status')->default(0);//live 1, not live 0
            $table->integer('admin_status')->default(0);//live 1, not live 0
            
            //target your students
            $table->longtext('what_will_students_learn')->nullable();
            $table->longtext('target_students')->nullable();
            $table->longtext('requirements')->nullable();
    
            //price and cupons
            $table->double('discount_price', 10, 2);
            $table->double('actual_price', 10, 2);
            
            //stats
            $table->integer('view_count')->default(0)->nullable();
            $table->integer('subscriber_count')->default(0)->nullable();
            
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
