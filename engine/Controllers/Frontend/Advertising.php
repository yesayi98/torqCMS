<?php

/**
 *
 */
class advertisingController extends Controller
{

  public function popup()
  {
    $this->route = "includes/popup";

    $request = $this->getRequest()->request['params'];
    $popupId = $request['popup'];
    $advertising = $this->__get('Advertisings');
    $popup = $advertising->getAdvertising($popupId);

    $this->View()->setAssign("popup", $popup);
  }

}


 ?>
