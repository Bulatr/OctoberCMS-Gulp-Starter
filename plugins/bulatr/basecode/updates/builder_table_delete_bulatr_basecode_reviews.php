<?php namespace Bulatr\BaseCode\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteBulatrBasecodeReviews extends Migration
{
    public function up()
    {
        Schema::dropIfExists('bulatr_basecode_reviews');
    }
    
    public function down()
    {
        Schema::create('bulatr_basecode_reviews', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('id_productitem');
            $table->string('name', 191);
            $table->integer('rating');
            $table->text('content');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('slug', 191);
        });
    }
}
