<?php namespace Bulatr\Reviews\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBulatrReviewsDatabase2 extends Migration
{
    public function up()
    {
        Schema::table('bulatr_reviews_database', function($table)
        {
            $table->boolean('permission')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('bulatr_reviews_database', function($table)
        {
            $table->dropColumn('permission');
        });
    }
}
