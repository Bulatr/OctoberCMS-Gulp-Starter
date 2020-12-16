<?php namespace Bulatr\BaseCode\Updates;

use Schema;
use Illuminate\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * Class UpdateTableShippingTypes1
 * @package Bulatr\BaseCode\Updates
 */
class UpdateTableShippingTypes1 extends Migration
{
    const TABLE_NAME = 'lovata_orders_shopaholic_shipping_types';

    public function up()
    {
        if (!Schema::hasTable(self::TABLE_NAME) || Schema::hasColumn(self::TABLE_NAME, 'srok_dostavki')) {
            return;
        }

        Schema::table(self::TABLE_NAME, function (Blueprint $obTable)
        {
            $obTable->string('srok_dostavki', 100)->default('5 - 10 дней');
        });
    }

    public function down()
    {
        if (!Schema::hasTable(self::TABLE_NAME) || !Schema::hasColumn(self::TABLE_NAME, 'srok_dostavki')) {
            return;
        }

        Schema::table(self::TABLE_NAME, function (Blueprint $obTable)
        {
            $obTable->dropColumn(['srok_dostavki']);
        });
    }
}