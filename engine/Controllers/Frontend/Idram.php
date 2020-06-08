<?php


/**
 *
 */
class idramController extends Controller
{
  private $payment = 2;
  private $url = 'https://money.idram.am/payment.aspx';

  public function index()
    {
      $requset = $this->getRequest()->request;
      $payment_method = $this->__get('Payments')->getPayment($this->payment);
      $order_id = $this->View()->getSession('order_id');
      define("SECRET_KEY", $payment_method["client_secret_key"]); // Idram Payment System provide it
      define("EDP_REC_ACCOUNT", $payment_method["client_id"]); // Idram Payment System provide it
      // var_dump(EDP_REC_ACCOUNT);
      // var_dump($_SESSION['ordernumber']);
      if(isset($requset['EDP_PRECHECK']) && isset($requset['EDP_BILL_NO']) && isset($requset['EDP_REC_ACCOUNT']) && isset($requset['EDP_AMOUNT'])){
          if($requset['EDP_PRECHECK'] == "YES"){
              if($requset['EDP_REC_ACCOUNT'] == EDP_REC_ACCOUNT){
                $bill_no = $requset['EDP_BILL_NO'];
                  exit("OK");
              }
          }
      }
      if(isset($requset['EDP_PAYER_ACCOUNT']) &&
        isset($requset['EDP_BILL_NO']) && isset($requset['EDP_REC_ACCOUNT']) &&
        isset($requset['EDP_AMOUNT']) && isset($requset['EDP_TRANS_ID']) && isset($requset['EDP_CHECKSUM'])){

            $txtToHash = EDP_REC_ACCOUNT . ":" .
                         $requset['EDP_AMOUNT'] . ":" .
                         SECRET_KEY . ":" .
                         $requset['EDP_BILL_NO'] . ":" .
                         $requset['EDP_PAYER_ACCOUNT'] . ":" .
                         $requset['EDP_TRANS_ID'] . ":" .
                         $requset['EDP_TRANS_DATE'];
            if(strtoupper($requset['EDP_CHECKSUM']) != strtoupper(md5($txtToHash))){
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
      $this->route = 'idram';
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

    public function debug()
    {
      var_dump($this->getRequest()->post);exit;
    }
}


 ?>
