<?php namespace Bulatr\BaseCode\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBulatrBasecodeReviews extends Migration
{
    public function up()
    {
        Schema::create('bulatr_basecode_reviews', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_productitem');
            $table->string('name');
            $table->integer('rating');
            $table->text('content');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bulatr_basecode_reviews');
    }
}
