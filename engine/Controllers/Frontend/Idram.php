<?php


/**
 *
 */
class idramController extends Controller
{
  private $payment = 2;
  private $url = 'https://money.idram.am/payment.aspx';

  public static $ignoreCSRF = array(
                                'index',
                                'success',
                                'error'
                              );

  public function index()
    {
      $request = $this->getRequest()->request;
      $payment_method = $this->__get('Payments')->getPayment($this->payment);

      $order_id = $this->View()->getSession('order_id');
      define("SECRET_KEY", $payment_method["client_secret_key"]); // Idram Payment System provide it
      define("EDP_REC_ACCOUNT", $payment_method["client_id"]); // Idram Payment System provide it
      // var_dump(EDP_REC_ACCOUNT);
      // var_dump($_SESSION['ordernumber']);
      if(isset($request['EDP_PRECHECK']) && isset($request['EDP_BILL_NO']) && isset($request['EDP_REC_ACCOUNT']) && isset($request['EDP_AMOUNT'])){
          if($request['EDP_PRECHECK'] == "YES"){
              if($request['EDP_REC_ACCOUNT'] == EDP_REC_ACCOUNT){
                $bill_no = $request['EDP_BILL_NO'];
                  exit("OK");
              }
          }
      }
      if(isset($request['EDP_PAYER_ACCOUNT']) &&
        isset($request['EDP_BILL_NO']) && isset($request['EDP_REC_ACCOUNT']) &&
        isset($request['EDP_AMOUNT']) && isset($request['EDP_TRANS_ID']) && isset($request['EDP_CHECKSUM'])){

            $txtToHash = EDP_REC_ACCOUNT . ":" .
                         $request['EDP_AMOUNT'] . ":" .
                         SECRET_KEY . ":" .
                         $request['EDP_BILL_NO'] . ":" .
                         $request['EDP_PAYER_ACCOUNT'] . ":" .
                         $request['EDP_TRANS_ID'] . ":" .
                         $request['EDP_TRANS_DATE'];
            if(strtoupper($request['EDP_CHECKSUM']) != strtoupper(md5($txtToHash))){
                // code to handling payment fail
                $sql = "UPDATE orders SET status = 3 WHERE id = '$order_id'";
                Connection()->set($sql);
                exit("FAIL");
            }
            else{
                // code to handling payment success
                $sql = "UPDATE orders SET status = 2 WHERE id ='$order_id'";

                Connection()->set($sql);

                exit("OK");
            }
      }
      exit("FAIL");
    }
    public function payOrder()
    {
      $this->route = 'frontend/idram/index';
      $payment_method = $this->__get('Payments')->getPayment($this->payment);
      $order_id = $this->View()->getSession('order_id');

      $langId = $this->View()->getSession('lang');

      $lang = $this->__get('Translator')->getLanguage($langId);

      $order = $this->__get('Orders')->getOrder($order_id);

      $orderdetails = '';

      foreach ($order['details'] as $orderdetail) {
        $orderdetails .= $orderdetail['name'].' x '.$orderdetail['quantity'].' - '.$orderdetail['total'].'; ';
      }
      $orderdetails .= $this->View()->translating('delivery').' - '.$order['delivery_price'];
      $this->View()->setAssign('lang', $lang);
      $this->View()->setAssign('payment_method', $payment_method);
      $this->View()->setAssign('order', $order);
      $this->View()->setAssign('orderdetails', $orderdetails);

    }

    public function success()
    {
      if ($this->getRequest()->request['EDP_BILL_NO']) {
        $order_id = $this->getRequest()->request['EDP_BILL_NO'];

        $sql = "UPDATE orders SET order_status = 2 WHERE id ='$order_id'";
        Connection()->set($sql);
      }
      Router::redirect('checkout/success');
    }

    public function error()
    {
      if ($this->getRequest()->request['EDP_BILL_NO']) {
        $order_id = $this->getRequest()->request['EDP_BILL_NO'];

        $sql = "UPDATE orders SET order_status = 3 WHERE id ='$order_id'";
        Connection()->set($sql);
      }
      Router::redirect('checkout/error');
    }

    public function debug()
    {
      var_dump($this->getRequest()->post);exit;
    }
}


 ?>
