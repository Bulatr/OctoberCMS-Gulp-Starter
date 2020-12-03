<?php namespace Bulatr\BaseCode\Updates;

use Schema;
use Illuminate\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * Class UpdateTablePropertyValues1
 * @package Bulatr\BaseCode\Updates
 */
class UpdateTablePropertyValues1 extends Migration
{
    const TABLE_NAME = 'lovata_properties_shopaholic_values';

    public function up()
    {
        if (!Schema::hasTable(self::TABLE_NAME) || Schema::hasColumn(self::TABLE_NAME, 'color_code')) {
            return;
        }

        Schema::table(self::TABLE_NAME, function (Blueprint $obTable)
        {
            $obTable->string('color_code',10)->default("#ffffff");
        });

    }

    public function down()
    {
        if (!Schema::hasTable(self::TABLE_NAME) || !Schema::hasColumn(self::TABLE_NAME, 'color_code')) {
            return;
        }

        Schema::table(self::TABLE_NAME, function (Blueprint $obTable)
        {
            $obTable->dropColumn(['color_code']);
        });
        
    }
}