<?php

/**
 *
 */
class Assign extends Controller
{

  public function view()
  {
    $routFile = $this->route;
    $user = array();
    if (Container()->getSession('user') != null){
      $user = Container()->Users()->getUser(Container()->getSession('user', 'id'));
    }
    if (empty($user['id'])) {
      $user = Container()->Users()->getUser(Container()->getCookie('user')['id']);
    }
    if (Container()->getSession('message') != null){
      $this->view->setAssign('message', Container()->getSession('message'));
      // Container()->setSession('message', '');
    }
    $metaKeys = Container()->Core()->getItem('meta-keywords')['content'];
    $metaDesc = Container()->Core()->getItem('meta-description')['content'];
    $logo = Container()->Core()->getItem('logo-image');
    $footerLogo = Container()->Core()->getItem('footer-logo');
    $languages = Container()->Translator()->getLanguageList();
    $currentLangId = Container()->getSession('lang');
    $currentLang = $languages[array_search($currentLangId, array_column($languages, 'id'))];
    $currencies = Container()->Currencies()->getCurrencies();
    $currentCurId = Container()->getSession('currency');
    $currentCur = $currencies[array_search($currentCurId, array_column($currencies, 'id'))];
    $basketProducts;
    if($user){
      $basketProducts = Container()->Basket()->getProductsByUser();
      $basketCount = $basketProducts?count($basketProducts):0;
    }elseif (session_id()) {
      $basketProducts = Container()->Basket()->getProductsBySession();
      $basketCount = $basketProducts?count($basketProducts):0;
    }
    $favorites = Container()->Wishlist()->getProductsBySession();
    $favCount = $favorites?count($favorites):0;
    $basketTotal = 0;
    if ($basketProducts) {
      foreach ($basketProducts as $basketProduct) {
        $basketTotal += $basketProduct['price'] - $basketProduct['price'] * $basketProduct['discount'] / 100;
      }
    }else{
      $basketProducts = [];
    }

    $mainCategories = Container()->Categories()->getCategoriesByParentId(0);

    $category = array_search($routFile, array_column($mainCategories, 'type'));
    $category = ($mainCategories[$category]['type'] == $routFile) ? $mainCategories[$category] : null;

    $title = ucfirst($routFile);

    if ($this->view->getSession('clearCache')) {
      $this->view->setAssign('clearCache', true);
    }

    $cookiePopup = "true";
    if (!isset($this->getRequest()->request['widget'])) {
      if (!Container()->getCookie('showpopup')) {
        Container()->setCookie('showpopup', 'false', 12*30*24*3600);
        $cookiePopup = Container()->getCookie('showpopup');
      }
      $this->view->setAssign('cookiePopup', $cookiePopup);
    }

    $searchCategories = Container()->Categories()->getCategoryList();


    $this->view->setAssign('user', $user);
    $this->view->setAssign('metaKeys', $metaKeys);
    $this->view->setAssign('metaKeys', $metaKeys);
    $this->view->setAssign('metaDesc', $metaDesc);
    $this->view->setAssign('logo', $logo);
    $this->view->setAssign('footerLogo', $footerLogo);
    $this->view->setAssign('languages', $languages);
    $this->view->setAssign('currentLang', $currentLang);
    $this->view->setAssign('currencies', $currencies);
    $this->view->setAssign('currentCur', $currentCur);
    $this->view->setAssign('Articles.basketProducts', $basketProducts);
    $this->view->setAssign('basketCount', $basketCount);
    $this->view->setAssign('basketTotal', $basketTotal);
    $this->view->setAssign('Articles.favorites', $favorites);
    $this->view->setAssign('favCount', $favCount);
    $this->view->setAssign('Categories.mainCategories', $mainCategories);
    $this->view->setAssign('BASE_FRONTEND', BASE_FRONTEND);
    $this->view->setAssign('title', $title);
    $this->view->setAssign('notFoundPath', Router::url(Container()->Media()->imagePath.'noimagefound.jpg'));
    $this->view->setAssign('Categories.searchCategories', $searchCategories);

      $categoryModel = $this->__get('Categories');
      $categories = $categoryModel->getCategoriesByParentId(1);


      foreach ($categories as &$category) {
        if ($category['has_subcategory']) {
          $category['subCategories'] = $categoryModel->getCategoriesByParentId($category['id']);
          $total = 0;
          foreach ($category['subCategories'] as &$subCategory) {
            $products = $this->__get('Articles')->getArticlesByCategoryWithPagination($subCategory['id']);
            $subCategory['productCount'] = $products['count'];
            $total += $subCategory['productCount'];
          }
          $category['productCount'] = $total;
        }
      }
      $curCode = $this->view->getSession('currency');
      $key = array_search($curCode, array_column($this->view->getAssign('currencies'), 'id'));

      $currencyCourse = $this->view->getAssign('currencies')[$key]['course'];


    if ($this->route = 'category') {
      $minPrice = $this->__get('Articles')->getMin('price');
      $minPrice = round(intval($minPrice)/intval($currencyCourse), 2);

      $maxPrice = $this->__get('Articles')->getMax('price');
      $maxPrice = round(intval($maxPrice)/intval($currencyCourse), 2);

      $this->view->setAssign('minPrice', $minPrice);
      $this->view->setAssign('maxPrice', $maxPrice);
    }
      $this->view->setAssign('Categories.advancedMenuItems', $categories);

  }

}


 ?>
