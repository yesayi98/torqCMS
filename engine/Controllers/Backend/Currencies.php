<?php
namespace Controllers\Backend;

/**
 * currencies Controller extends from backendController abstract class
 */
class currenciesController extends \BackendController
{
  // index action
  // index is a default action
  public function index()
  {
    $currencies = $this->__get('Currencies')->getCurrencyList();

    $this->View()->setAssign('currencies', $currencies);
  }

  // detail action
  public function detail()
  {
    // get request
    $request = $this->getRequest()->request;
    $currencyModel = $this->__get('Currencies');
    $currency = $currencyModel->getCurrency($request['l']);

    $this->View()->setAssign('currency', $currency);
  }

  // save action
  public function save()
  {
    // get request
    $request = $this->getRequest()->request;
    // create currency array
    $currency = array();
    // set currency parapms
    $currency['name'] = $request['name'];
    $currency['description'] = $request['description'];
    $currency['symbol'] = $request['symbol'];
    $currency['course'] = (float) $request['course'];
    $currency['code'] = $request['code'];
    $currency['default'] = (int) $request['default'];
    // var_dump($currency);exit;
    // set operation status and message
    $success = true;
    $message = 'success';
    // get currency model
    $currencyModel = $this->__get('Currencies');
    if (empty($request['id'])) {
      $success = $currencyModel->setCurrency($currency);
      $currency['id'] = Connection()->getLastInserted();
      if (!$success) {
        $message = Connection()->getError();
      }
    }else{
      $currency['id'] = $request['id'];
      $success = $currencyModel->updateCurrency($currency);
      if (!$success) {
        $message = Connection()->getError();
      }
    }

    if ($request['XHR']) {
      die(json_encode([
        'success' => $success,
        'message' => $message,
      ]));
    }

    Router::redirect('backend/currencies/detail?l='.$currency['id']);
  }

  // delete action
  public function delete()
  {
    // get request
    $request = $this->getRequest()->request;
    if (empty($request['l'])) {
      return;
    }
    $currencyModel = $this->__get('Currencies');
    $currency = $currencyModel->deleteCurrency($request['id']);

    if ($request['XHR']) {
      die(json_encode([
        'success' => $success,
        'message' => $message,
      ]));
    }

    Router::redirect('backend/currencies');
  }
}


 ?>
