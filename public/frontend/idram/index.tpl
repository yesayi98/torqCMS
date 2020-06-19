<!DOCTYPE html>
<html>
  <body>
    <form action="https://money.idram.am/payment.aspx" id="idram" method="POST">
          <input type="hidden" name="EDP_LANGUAGE" value="{$lang.short_code}">
          <input type="hidden" name="EDP_REC_ACCOUNT" value="{$payment_method.client_id}">
          <input type="hidden" name="EDP_DESCRIPTION" value="{$orderdetails}">
          <input type="hidden" name="EDP_AMOUNT" value="{$order.total_price}">
          <input type="hidden" name="EDP_BILL_NO" value="{$order.id}">
    </form>
    <script type="text/javascript">
      document.getElementById("idram").submit();
    </script>
  </body>
</html>
