<?php namespace Bulatr\BaseCode\Models;

use Lovata\Shopaholic\Models\Category;
use System\Models\File;
use October\Rain\Database\Model;
use October\Rain\Database\Traits\Validation;

/**
 * Class Settings
 * @package Bulatr\BaseCode\Models
 * @author  Andrey Kahranenka, a.khoronenko@lovata.com, LOVATA Group
 */
class Settings extends Model
{
    use Validation;

    public $implement = ['System.Behaviors.SettingsModel'];
    public $settingsCode = 'bulatr_site_settings';
    public $settingsFields = 'fields.yaml';

    public $attachMany = [];

    public $rules = [];

    /**
     * Get setting value from cache
     * @param string $sCode
     * @return null|string
     */
    public static function getValue($sCode) {

        if(empty($sCode)) {
            return null;
        }

        //Get settings object
        $obSettings = self::where('item', 'bulatr_site_settings')->first();
        if(empty($obSettings)) {
            return null;
        }

        $sValue = $obSettings->$sCode;
        return $sValue;
    }

    /**
     * Get Image data
     * @param $sCode
     * @return \System\Models\File|null
     */
    public static function getImageData($sCode) {

        /** @var File $obImage */
        $obImage = File::where('attachment_type', 'Bulatr\SiteSettings\Models\Settings')->where('field', $sCode)->first();
        if(empty($obImage)) {
            return null;
        }

        return $obImage;
    }


    /**
     * Get Category List
     * Return array
     */
    
    public function getCategoryIdOptions() {

        $obCategoryList = Category::active()->Lists('name', 'id');
        return $obCategoryList;
    }
}