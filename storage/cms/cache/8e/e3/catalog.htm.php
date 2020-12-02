<?php 
class Cms5fc702a57bf67346884892_c9bea62661d7b385e850015d00d86469Class extends Cms\Classes\PageCode
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
        $obBrandList = $this->Catalog->getBrandList();
        $iMaxPage = $this->Pagination->getMaxPage($obProductList->count());
        $obActiveCategory = $this->Catalog->getActiveCategory();
        $arProductList = $this->Catalog->getProductListWithPagination($this->Pagination->getCountPerPage());
        $obFilterProductPropertyList = $this->FilterPanel->getOfferPropertyList(['cloches','shoes'], $obProductList);
        // Передача в шаблон
        $this['obProduct'] = $obProductItem;
        $this['obProductList'] = $obProductList;
        $this['obBrandList'] = $obBrandList;
        $this['obBrand'] = $obBrandItem;        
        $this['obFilterProductPropertyList'] = $obFilterProductPropertyList;
        $this['sActiveSort'] = $sActiveSort;
        $this['iMaxPage'] = $iMaxPage;
    }

    $this['obActiveCategory'] = $obActiveCategory; // Текущая активна категория которую отправляем в партиал product-list
}
}
