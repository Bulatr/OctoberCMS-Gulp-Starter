<?php namespace Bulatr\Reviews\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBulatrReviewsDatabase3 extends Migration
{
    public function up()
    {
        Schema::table('bulatr_reviews_database', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('bulatr_reviews_database', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
