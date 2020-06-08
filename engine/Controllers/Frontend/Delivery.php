<?php

/**
 * deliveryclass
 */
class deliveryController extends Controller
{

  public function index()
  {
    // code...
  }

  public function getCities()
  {
    $deliveryModel = $this->__get('Delivery');

    $region_id = $this->getRequest()->post['region_id'];

    $cities = $deliveryModel->getDeliveryCityListByRegion($region_id);
    $cities = json_encode($cities);
    die($cities);
  }

}


 ?>
