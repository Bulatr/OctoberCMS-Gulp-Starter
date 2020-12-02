<?php namespace Bulatr\BaseCode\Components;

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
    protected $sActiveSort = null;    
    protected $iPage = null;
    /** @var null|\Lovata\Shopaholic\Classes\Collection\ProductCollection */
    protected $arProductList = null;
    /** @var null|\Lovata\Shopaholic\Classes\Collection\BrandCollection */
    protected  $obBrandList = null;
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
     * Get product list width pagination
     * @param int $iCountPerPage
     * @return array
    */
    public function getProductListWithPagination($iCountPerPage) 
    {
        $this->arProductList = $this->obProductList->page($this->iPage, $iCountPerPage);
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
    }

    /** Init product list object */
    public function initProductList() 
    {
        $this->obProductList = ProductCollection::make()
        ->active()
        ->sort($this->sActiveSort)
        ->category([$this->obActiveCategoryItem->id], true);
    }

    /** Init brand list object */
    public function initBrandList() 
    {        
        $this->obBrandList = BrandCollection::make()
        ->active()
        ->sort()
        ->category($this->obActiveCategoryItem->id);
    }

}
