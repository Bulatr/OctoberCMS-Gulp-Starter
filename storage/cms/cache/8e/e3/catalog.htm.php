<?php 
class Cms5fca55d09a748668710641_5b7b40b1e55efece5abe286c3734536dClass extends Cms\Classes\PageCode
{
public function onInit() {
    // делаем проверку, если мы не нашли категорию и не нашли товар в параметре последнего слага :category*/:slug?
    // то нужно отобразить 404 ошибку
    /**
     * @var \Bulatr\BaseCode\Components
    */
    $obProductItem = $this->ProductPage->get();
    $obBrandItem = $this->BrandPage->get();
    $obCategoryItem = $this->CategoryPage->get();    
    $obMainCategoryItem = $this->MainCategoryPage->get();
        
    if (!empty($this->param('slug')) && empty($obProductItem) && empty($obBrandItem) && empty($obCategoryItem)) {
        return $this->ProductPage->getErrorResponse(); // используем компонент ProductPage и его метод getErrorResponse - он вернет 404 ошибку
    }

    $this->Catalog->setRequestData($obProductItem, $obMainCategoryItem, $obCategoryItem, $obBrandItem);

    if (empty($obProductItem)) 
    {
        $sActiveSort = $this->ProductList->getSorting();
        $iPage = $this->Pagination->getPageFromRequest(); // Номер текущей страницы        
        $this->Catalog->initCatalogData($sActiveSort, $iPage);
        $obProductList = $this->Catalog->getProductList();
        $obFilteredProductList = $this->Catalog->getFilteredProductList();
        $obBrandList = $this->Catalog->getBrandList();
        $iMaxPage = $this->Pagination->getMaxPage($obProductList->count());
        $obActiveCategory = $this->Catalog->getActiveCategory();
        $arProductList = $this->Catalog->getProductListWithPagination($this->Pagination->getCountPerPage());
        $obFilterProductPropertyList = $this->Catalog->getFilterProductPropertyList()->setCategory(null)->setProductList($obProductList);
        //$this->FilterPanel->getOfferPropertyList(['cloches','shoes'], $obProductList);
        // Передача в шаблон
        $this['iPage'] = $iPage;
        $this['iCount'] = $obFilteredProductList->count();
        $this['obProductList'] = $obProductList;
        $this['obBrandList'] = $obBrandList;
        $this['obBrand'] = $obBrandItem;        
        $this['obFilterProductPropertyList'] = $obFilterProductPropertyList;
        $this['sActiveSort'] = $sActiveSort;
        $this['iMaxPage'] = $iMaxPage;
        $this['obFilteredProductList'] = $obFilteredProductList;
        $this['arProductList'] = $arProductList;
        $this['obActiveCategory'] = $obActiveCategory; // Текущая активна категория которую отправляем в партиал product-list
    } else {
        $this['obProduct'] = $obProductItem;
    }
    $this['obMainCategoryItem'] = $obMainCategoryItem;
    
}
}
