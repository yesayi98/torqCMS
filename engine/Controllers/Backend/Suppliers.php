<?php

/**
 * supplier Controller hanling an supplier requests
 */
class suppliersController extends BackendController
{
  private $categories = [];

  public function index()
  {
    $suppliersModel = $this->__get('Supplier');
    $suppliers = $suppliersModel->getSupplierList();

    if (!empty($this->getRequest()->request['XHR'])) {
      $this->route = "backend/suppliers/table";
    }

    $this->View()->setAssign('suppliers', $suppliers);
  }

  public function detail()
  {
    $supplier_id = $this->getRequest()->get['a'];

    if (!empty($supplier_id)) {
      $supplier = $this->__get('Supplier')->getSupplier($supplier_id);
      $this->View()->setAssign('supplier', $supplier);
    }
  }


  public function save()
  {
    $request = $this->getRequest()->request;
    $supplier['name'] = $request['name'];
    $supplier['description'] = $request['description'];
    $supplier['media_id'] = $request['media_id'];
    $supplier['address'] = $request['address'];
    $success = true;

    if (!empty($request['id'])) {
      $supplier['id'] = $request['id'];
      $success = $this->updateSupplier($supplier);
    }else{
      $supplier['id'] = $this->insertSupplier($supplier);
    }
    $message = "success";
    if (!$success) {
      $message = Connection()->getError();
    }
    if ($request['XHR']) {
      die(
        json_encode(
            array(
              'success' => $success,
              'message' => $message
            )
          )
        );
    }else{
      Router::redirect('backend/suppliers/detail?a='.$supplier['id']);
    }
  }

  /**
  * @param array $supplier
  * @return int $insertedId
  */
  private function insertSupplier($supplier)
  {
    $this->__get('Supplier')->setSupplier($supplier);

    return Connection()->getInsertedId();
  }

  /**
  * @param array $supplier
  * @return int
  */
  private function updateSupplier($supplier)
  {
    $inserted = $this->__get('Supplier')->updateSupplier($supplier);
    return $inserted;
  }




  /**
  * actions should be public function
  * delete is an action, calls on running blog delete
  */
  public function delete()
  {
    // get request params
    $reqeust = $this->getRequest();
    $supplierID = $reqeust->get['a'];

    // get blog model
    $model = $this->__get('Supplier');
    // deleting
    $success = $model->deleteSupplier($supplierID);
    $message = "success";
    if (!$success) {
      $message = Connection()->getError();
    }
    if ($request['XHR']) {
      die(
        json_encode(
            array(
              'success' => $success,
              'message' => $message
            )
          )
        );
    }else{
      Router::redirect('backend/suppliers/');
    }
  }

}



 ?>
