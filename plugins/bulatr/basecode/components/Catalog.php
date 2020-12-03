<?php namespace Bulatr\BaseCode\Components;

use Input;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Lovata\Shopaholic\Classes\Collection\ProductCollection;
use Lovata\Shopaholic\Classes\Collection\BrandCollection;
use Lovata\Shopaholic\Classes\Item\CategoryItem;


/**
 * Class Catalog
 * @package Bulatr\BaseCode\Components
 */
class Catalog extends ComponentBase
{
    /** @var null|\Lovata\Shopaholic\Classes\Item\ProductItem */
    protected $obProductItem = null;
    /** @var null|\Lovata\Shopaholic\Classes\Item\CategoryItem */
    protected $obMainCategoryItem = null;
    /** @var null|\Lovata\Shopaholic\Classes\Item\CategoryItem */
    protected $obActiveCategoryItem = null;
    /** @var null|\Lovata\Shopaholic\Classes\Item\BrandItem */
    protected $obBrandItem = null;

    /** @var null|\Lovata\Shopaholic\Classes\Collection\ProductCollection */
    protected $obProductList = null;
    
    /** @var null|\Lovata\Shopaholic\Classes\Collection\ProductCollection */
    protected $obFilteredProductList = null; 
    protected $sActiveSort = null;    
    protected $iPage = null;
    /** @var null|\Lovata\Shopaholic\Classes\Collection\ProductCollection */
    protected $arProductList = null;
    /** @var null|\Lovata\Shopaholic\Classes\Collection\BrandCollection */
    protected  $obBrandList = null;
    protected $arFilterPropertyList = [];
    protected $arFilterBrandList = [];
    protected $arFilterCategoryList = [];
    /** @var \Lovata\PropertiesShopaholic\Classes\Collection\FilterPropertyCollection */
    protected $obFilterProductPropertyList;


    /**
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'        => 'bulatr.basecode::lang.component.catalog_title',
            'description' => 'bulatr.basecode::lang.component.catalog_description'
        ];
    }

    
    /** 
     * Get product list width filter by active and category
     * @return ProductCollection
    */
    public function getProductList() 
    {
        return $this->obProductList;
    }

    /** 
     * Get product list width filter by brands and properties
     * @return ProductCollection
    */
    public function getFilteredProductList() 
    {
        return $this->obFilteredProductList;
    }

    /** 
     * Get active category object
     * @return CategoryItem
    */
    public function getActiveCategory() 
    {
        return $this->obActiveCategoryItem;
    }

    /** 
     * Get brand list width filter by active and category
     * @return BrandCollection
    */
    public function getBrandList() 
    {
        return $this->obBrandList;
    }

    /** 
     * Get brand ID list
     * @return array
    */
    public function getFilterBrandList() 
    {
        return $this->arFilterBrandList;
    }

    /** 
     * Get property list from request
     * @return array
    */
    public function getFilterPropertyList() 
    {
        return $this->arFilterPropertyList;
    }

    /** 
     * Get filter product property list
     * @return \Lovata\PropertiesShopaholic\Classes\Collection\FilterPropertyCollection
    */
    public function getFilterProductPropertyList() 
    {
        return $this->obFilterProductPropertyList;
    }

    /** 
     * Get category list fron request
     * @return array
    */
    public function getFilterCategoryList() 
    {
        return $this->arFilterCategoryList;
    }

    /** 
     * Get product list width pagination
     * @param int $iCountPerPage
     * @return array
    */
    public function getProductListWithPagination($iCountPerPage) 
    {
        $this->arProductList = $this->obFilteredProductList->page($this->iPage, $iCountPerPage);
        return $this->arProductList;
    }

    /**
     * Get breadcrumbs array
     * @return array
     */
    public function getBreadcrumbs() 
    {
        $arBreadcrumbs = [];
        $obCurrentCategory = $this->obActiveCategoryItem;
        $obProductItem = $this->obProductItem;
        $obBrandItem = $this->obBrandItem;


        if (!empty($obProductItem)) {
            $arBreadcrumbs[] = [
                'name' => $obProductItem->name, 
                'url' => $obProductItem->getPageUrl('catalog'),
                'active'    =>  true
                ];        
        }

        if (!empty($obBrandItem)) {
            $arBreadcrumbs[] = [
                'name' => $obBrandItem->name, 
                'url' => $obBrandItem->getPageUrl('catalog'),
                'active'    =>  true
                ];
        }

        while($obCurrentCategory->isNotEmpty()) {
            
            $arBreadcrumbs[] = [
                'name' => $obCurrentCategory->name, 
                'url' => $obCurrentCategory->getPageUrl('catalog', ['slug']),
                'active'    =>  $obCurrentCategory->id == $this->obActiveCategoryItem->id
                ];
            $obCurrentCategory = $obCurrentCategory->parent;
        }
        
        $arBreadcrumbs[] = [
            'name' => 'Каталог',
            'url' => Page::url('catalog-tree'),
            'active' => false,
        ];

        $arBreadcrumbs[] = [
            'name' => 'Главная',
            'url'   =>  Page::url('home'),
            'active'    =>  false
        ];
        $arBreadcrumbs = array_reverse($arBreadcrumbs);

        return $arBreadcrumbs;
    }

    /**
     * @param \Lovata\Shopaholic\Classes\Item\ProductItem $obProductItem  
     * @param \Lovata\Shopaholic\Classes\Item\CategoryItem $obMainCategoryItem 
     * @param \Lovata\Shopaholic\Classes\Item\CategoryItem $obCategoryItem 
     * @param \Lovata\Shopaholic\Classes\Item\BrandItem $obBrandItem
     */

    public function setRequestData($obProductItem, $obMainCategoryItem, $obCategoryItem, $obBrandItem) 
    {
        $this->obProductItem = $obProductItem;
        $this->obMainCategoryItem = $obMainCategoryItem;

        $this->obActiveCategoryItem = $obMainCategoryItem;
        if (!empty($obCategoryItem)) {
            $this->obActiveCategoryItem = $obCategoryItem;
        }

        $this->obBrandItem = $obBrandItem;

        $this->obFilterProductPropertyList = $this->obActiveCategoryItem->offer_filter_property;
    }
    
    /**
     * Init catalog objects
     * @param string $sActiveSort
     * @param int $iPage
     */
    public function initCatalogData($sActiveSort, $iPage) 
    {
        $this->sActiveSort = $sActiveSort;
        $this->iPage = $iPage;
        $this->initProductList();
        $this->initBrandList();
        $this->initFilterPropertyList();
        $this->initFilteredProductList();
    }

    /** Init product list object */
    protected function initProductList() 
    {
        $this->obProductList = ProductCollection::make()
        ->active()
        ->sort($this->sActiveSort)
        ->category([$this->obActiveCategoryItem->id], true);
    }

    /** Init filtered product list object */
    protected function initFilteredProductList() 
    {
        $this->obFilteredProductList = $this->obProductList->copy();
        if (!empty($this->arFilterBrandList)) {
            $this->obFilteredProductList->filterByBrandList($this->arFilterBrandList);
        }
        if (!empty($this->arFilterPropertyList)) {
            $this->obFilteredProductList->filterByProperty($this->arFilterPropertyList, $this->obFilterProductPropertyList);
        }
    }

    /** Init brand list object */
    protected function initBrandList() 
    {        
        $this->obBrandList = BrandCollection::make()
        ->active()
        ->sort()
        ->category($this->obActiveCategoryItem->id);
        $sFilter = Input::get('brand');
        if (empty($sFilter)) {
            return;
        }
        $arFilterValue = explode("|", $sFilter);

        /** @var \Lovata\Shopaholic\Classes\Item\BrandItem $obBrandItem */

        foreach ($this->obBrandList as $obBrandItem) {
            if (in_array($obBrandItem->slug, $arFilterValue)) {
                $this->arFilterBrandList[]=$obBrandItem->id;
            }
        }
    }

    protected function initFilterPropertyList()
    {
        /** Получаем данные с URL */
        $this->arFilterPropertyList = Input::get('property'); 
        $this->arFilterPropertyList = $this->parseRequestValue($this->arFilterPropertyList);
    }

    /**
     * Парсим Url c разделителем |
     * Parse request array
     * @param array $arValueList
     * @return array
     */
    protected function parseRequestValue($arValueList)
    {
        if (empty($arValueList)) {
            return [];
        }
        foreach ($arValueList as $iKey => $sValue) {
            $arValueList[$iKey] = explode('|', $sValue);
        }
        return $arValueList;
    }

}
