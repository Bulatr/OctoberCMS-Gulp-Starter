<?php namespace Bulatr\BaseCode\Updates;

use Schema;
use Illuminate\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * Class UpdateTableProducts1
 * @package Lovata\BaseCode\Updates
 */
class UpdateTableProducts1 extends Migration
{
    const TABLE_NAME = 'lovata_shopaholic_products';

    public function up()
    {
        /** popularity column   */ 

        if (!Schema::hasTable(self::TABLE_NAME) || Schema::hasColumn(self::TABLE_NAME, 'popularity')) {
            return;
        }

        /** properties column  */
        
        if (!Schema::hasTable(self::TABLE_NAME) || Schema::hasColumn(self::TABLE_NAME, 'properties')) {
            return;
        }


        /** popularity */

        Schema::table(self::TABLE_NAME, function (Blueprint $obTable)
        {
            $obTable->boolean('popularity')->default(0);
        });

        /** properties */

        Schema::table(self::TABLE_NAME, function (Blueprint $obTable)
        {
            $obTable->boolean('properties')->default(0);
        });
    }

    public function down()
    {

        /** popularity */

        if (!Schema::hasTable(self::TABLE_NAME) || !Schema::hasColumn(self::TABLE_NAME, 'popularity')) {
            return;
        }

        Schema::table(self::TABLE_NAME, function (Blueprint $obTable)
        {
            $obTable->dropColumn(['popularity']);
        });

        /** properties */

        if (!Schema::hasTable(self::TABLE_NAME) || !Schema::hasColumn(self::TABLE_NAME, 'properties')) {
            return;
        }

        Schema::table(self::TABLE_NAME, function (Blueprint $obTable)
        {
            $obTable->dropColumn(['properties']);
        });
    }
}