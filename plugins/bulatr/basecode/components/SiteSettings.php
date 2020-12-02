<?php namespace Bulatr\BaseCode\Components;

use Cms\Classes\ComponentBase;
use Bulatr\BaseCode\Models\Settings;

/**
 * Class SiteSettings
 * @package Bulatr\BaseCode\Components
 */
class SiteSettings extends ComponentBase
{
    /**
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'        => 'bulatr.basecode::lang.component.site_settings_title',
            'description' => 'bulatr.basecode::lang.component.site_settings_description'
        ];
    }

    /**
     * Get value by field code
     * @param $sCode
     * @return string|array
     */
    public function get($sCode)
    {
        return Settings::getValue($sCode);
    }

    /**
     * Get phone number by field code
     * @param $sCode
     * @return mixed
     */
    public function getPhone($sCode)
    {
        $sValue = $this->get($sCode);
        return $this->getPhoneValue($sValue);
    }

    /**
     * @param string $sValue
     * @return null|string|string[]
     */
    public function getPhoneValue($sValue)
    {
        return preg_replace('%\D\+%', '', $sValue);
    }

    /**
     * Получить данные изображения
     * @param $sCode
     * @return \System\Models\File|null
     */
    public function getImage($sCode)
    {
        return Settings::getImageData($sCode);
    }
}
