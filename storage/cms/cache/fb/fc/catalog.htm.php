<?php 
class Cms5fc36e8f98bfd792631654_1d878f33172615810bae3fc65a22dec5Class extends Cms\Classes\PageCode
{
public function onInit() {
    // делаем проверку, если мы не нашли категорию и не нашли товар в параметре последнего слага :category*/:slug?
    // то нужно отобразить 404 ошибку
    $obProductItem = $this->ProductPage->get();
    $obBrandItem = $this->BrandPage->get();
    $obCategoryItem = $this->CategoryPage->get();
    $obMainCategoryItem = $this->MainCategoryPage->get();
    if (!empty($this->param('slug')) && empty($obProductItem) && empty($obBrandItem) && empty($obCategoryItem)) {
        return $this->ProductPage->getErrorResponse(); // используем компонент ProductPage и его метод getErrorResponse - он вернет 404 ошибку
    }
    $obActiveCategoryItem = !empty($obCategoryItem) ? $obCategoryItem : $obMainCategoryItem;
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
    $this['obProduct'] = $obProductItem;
    $this['obBrand'] = $obBrandItem;
    $this['obActiveCategory'] = $obActiveCategoryItem; // Текущая активна категория которую отправляем в партиал product-list
    $this['arBreadcrumbs'] = $arBreadcrumbs;
}
}
