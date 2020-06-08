<?php


/**
 *
 */
class ameriaController extends Controller
{
  private $payment = 3;
  private $url = 'https://services.ameriabank.am/VPOS/';
  private $crediturl = 'https://customertest.ameriabank.am/api/loan';

  public function index()
    {
      $request = $this->getRequest()->request;

      //get payment data
      $payment_method = $this->__get('Payments')->getPayment($this->payment);

      //get current order
      $order_id = $this->View()->getSession('order_id');
      $order = $this->__get('Orders')->getOrder($order_id);

      //get current language
      $langId = $this->View()->getSession('lang');
      $lang = $this->__get('Translator')->getLanguage($langId);

    if($request['resposneCode'] != '00'){
          // code to handling payment fail
          $sql = "UPDATE orders SET order_status = 3 WHERE id = '$order_id'";
          Connection()->set($sql);
          redirect(url('checkout/error'));
      }
      else{
          redirect(url('ameria/getDetails').'?payment_id='.$request['paymentID']);
      }

    }

    public function payOrder()
    {
      //get payment data
      $payment_method = $this->__get('Payments')->getPayment($this->payment);

      //get current order
      $order_id = $this->View()->getSession('order_id');
      $order = $this->__get('Orders')->getOrder($order_id);

      //get current language
      $langId = $this->View()->getSession('lang');
      $lang = $this->__get('Translator')->getLanguage($langId);

      $orderdetails = '';

      foreach ($order['details'] as $orderdetail) {
        $orderdetails .= $orderdetail['name'].' x '.$orderdetail['quantity'].' - '.$orderdetail['total'].'; ';
      }
      $orderdetails .= $this->View()->translating('delivery').' - '.$order['delivery_price'];

      //get current currency
      $currency = $this->View()->getAssign('currentCur');

      $data = array(
        'ClientID' => $payment_method['client_secret_key'],
        'Amount' => $order['total_price'],
        'OrderID' => $order['id'],
        'BackURL' => url('ameria'),
        'Username' => $payment_method['client_id'],
        'Password' => $payment_method['client_password'],
        'Description' => $orderdetails,
        // 'Currency' => $currency['code'],
      );
      $data_string = json_encode($data);
      $ch = curl_init($this->url.'api/VPOS/InitPayment');
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
          'Content-Type: application/json',
          'Content-Length: ' . strlen($data_string))
      );
      // execute!
      $response = curl_exec($ch);

      // close the connection, release resources used
      curl_close($ch);

      // do anything with response
      $response = json_decode($response);
      if ($response->ResponseCode != 1) {
        $sql = "UPDATE orders SET order_status = 3 WHERE id = '$order_id'";
        Connection()->set($sql);
        redirect(url('checkout/error'));
      }

      $paymentID = $response->PaymentID;
      redirect($this->url.'Payments/Pay?id='.$paymentID.'&lang='.strtolower($lang['short_code']));
    }

    public function getDetails()
    {
      //get payment data
      $request = $this->getRequest()->request;
      //get payment data
      $payment_method = $this->__get('Payments')->getPayment($this->payment);

      //get paymentID from request
      $payment_id = $request['payment_id'];

      //get pay Details
      $data = array(
        'PaymentID' => $payment_id,
        'Username' => $payment_method['client_id'],
        'Password' => $payment_method['client_password'],
      );
      $data_string = json_encode($data);
      $ch = curl_init($this->url.'api/VPOS/GetPaymentDetails');
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
          'Content-Type: application/json',
          'Content-Length: ' . strlen($data_string))
      );
      // execute!
      $response = curl_exec($ch);

      // close the connection, release resources used
      curl_close($ch);

      // do anything with response
      $response = json_decode($response);

      if ($response->ResponseCode == '00') {
        // code to handling payment success
        $sql = "UPDATE orders SET order_status = 2 WHERE id ='$order_id'";
        Connection()->set($sql);

        redirect(url("checkout/success"));
      }else{
        // code to handling payment fail
        $sql = "UPDATE orders SET order_status = 3 WHERE id = '$order_id'";
        Connection()->set($sql);

        redirect(url("checkout/error"));
      }
    }


    public function getRequestForCredit()
    {
      $request = $this->getRequest()->request;
      
    }
}


 ?>
