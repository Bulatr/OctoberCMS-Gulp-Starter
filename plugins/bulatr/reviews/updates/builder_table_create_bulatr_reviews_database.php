<?php namespace Bulatr\Reviews\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBulatrReviewsDatabase extends Migration
{
    public function up()
    {
        Schema::create('bulatr_reviews_database', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('content');
            $table->integer('id_productitem');
            $table->integer('rating')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bulatr_reviews_database');
    }
}
