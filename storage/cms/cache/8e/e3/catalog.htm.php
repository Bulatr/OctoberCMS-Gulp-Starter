<?php 
class Cms5fc5041341a21758517535_e88d5e17580a15e77c9d30b17073a14aClass extends Cms\Classes\PageCode
{
public function onInit() {
    // делаем проверку, если мы не нашли категорию и не нашли товар в параметре последнего слага :category*/:slug?
    // то нужно отобразить 404 ошибку
    $obProductItem = $this->ProductPage->get();
    $obBrandItem = $this->BrandPage->get();
    $obCategoryItem = $this->CategoryPage->get();    
    $obMainCategoryItem = $this->MainCategoryPage->get();
    $sActiveSort = $this->ProductList->getSorting();
    $iPage = $this->Pagination->getPageFromRequest(); // НОмер текущей страницы
    
    if (!empty($this->param('slug')) && empty($obProductItem) && empty($obBrandItem) && empty($obCategoryItem)) {
        return $this->ProductPage->getErrorResponse(); // используем компонент ProductPage и его метод getErrorResponse - он вернет 404 ошибку
    }
    $obActiveCategoryItem = !empty($obCategoryItem) ? $obCategoryItem : $obMainCategoryItem;
    $obProductList = $this->ProductList->make()->active()->category($obActiveCategoryItem->id, true);
    $arProductList = $obProductList->page($iPage, $this->Pagination->getCountPerPage());
    $iMaxPage = $this->Pagination->getMaxPage($obProductList->count());
    

    $arBreadcrumbs = [];

     if (empty($obProductItem)) {
         $obProductList = $this->ProductList->make()->active()->sort($sActiveSort)->category([$obActiveCategoryItem->id], true);
     }

   
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

    if (!empty($obActiveCategoryItem)) {
        $obCurrentCategory = $obActiveCategoryItem;
        while($obCurrentCategory->isNotEmpty()) {
            
            $arBreadcrumbs[] = [
                'name' => $obCurrentCategory->name, 
                'url' => $obCurrentCategory->getPageUrl('catalog', ['slug']),
                'active'    =>  $obCurrentCategory->id == $obActiveCategoryItem->id
                ];
            $obCurrentCategory = $obCurrentCategory->parent;
        }
    }
     $arBreadcrumbs[] = [
        'name' => 'Главная',
        'url'   =>  \Cms\Classes\Page::url('home'),
        'active'    =>  false
    ];
    $arBreadcrumbs = array_reverse($arBreadcrumbs);

    // Передача в шаблон
    $this['obProduct'] = $obProductItem;
    $this['obProductList'] = $obProductList;
    $this['obBrand'] = $obBrandItem;
    $this['obActiveCategory'] = $obActiveCategoryItem; // Текущая активна категория которую отправляем в партиал product-list
    $this['arBreadcrumbs'] = $arBreadcrumbs;
    $this['sActiveSort'] = $sActiveSort;
    $this['iMaxPage'] = $iMaxPage;
}
}
