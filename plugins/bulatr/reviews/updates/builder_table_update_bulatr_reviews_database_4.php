<?php namespace Bulatr\Reviews\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBulatrReviewsDatabase4 extends Migration
{
    public function up()
    {
        Schema::table('bulatr_reviews_database', function($table)
        {
            $table->renameColumn('id_productitem', 'id_productitem_id');
        });
    }
    
    public function down()
    {
        Schema::table('bulatr_reviews_database', function($table)
        {
            $table->renameColumn('id_productitem_id', 'id_productitem');
        });
    }
}
