<?php namespace Bulatr\BaseCode\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBulatrBasecodeReviews extends Migration
{
    public function up()
    {
        Schema::table('bulatr_basecode_reviews', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('bulatr_basecode_reviews', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
