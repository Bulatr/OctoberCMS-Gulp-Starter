<?php 
class Cms5fc3b7b97cfb1860997907_40bb4da755da07e5db5278592545f64aClass extends Cms\Classes\PageCode
{
public function onInit() {
    // делаем проверку, если мы не нашли категорию и не нашли товар в параметре последнего слага :category*/:slug?
    // то нужно отобразить 404 ошибку
    $obProductItem = $this->ProductPage->get();
    $obProductList = $this->ProductList->make()->active();
    $obBrandItem = $this->BrandPage->get();
    $obCategoryItem = $this->CategoryPage->get();    
    $obMainCategoryItem = $this->MainCategoryPage->get();
    $sActiveSort = $this->ProductList->getSorting();
    
    if (!empty($this->param('slug')) && empty($obProductItem) && empty($obBrandItem) && empty($obCategoryItem)) {
        return $this->ProductPage->getErrorResponse(); // используем компонент ProductPage и его метод getErrorResponse - он вернет 404 ошибку
    }
    $obActiveCategoryItem = !empty($obCategoryItem) ? $obCategoryItem : $obMainCategoryItem;
    $obProductList = $this->ProductList->make()->active()->category($obActiveCategoryItem->id, true);
    $arBreadcrumbs = [];
   
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
}
}
