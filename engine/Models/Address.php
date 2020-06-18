<?php
namespace Models\Users\Address;

/**
 *
 */
class Address extends \Model
{


  public function getAddressByUser($user_id)
  {

    if (!$user_id) {
      return;
    }

    $user_id = intval($user_id);

    $sql = "SELECT * FROM user_address WHERE user_id = $user_id";

    $addresses = (Connection()->fetchAll($sql)) ? Connection()->fetchAll($sql) : [] ;
    return $addresses;
  }

  public function getAddressById($address_id)
  {

    if (!$address_id) {
      return;
    }

    $address_id = intval($address_id);

    $sql = "SELECT * FROM user_address WHERE id = $address_id";

    $address = Connection()->fetchOne($sql);
    $address['city_info'] = Container()->Delivery()->getDeliveryCity($address['city']);

    return $address;
  }

  public function setAddress(array $address)
  {
    if(!$address){
      return;
    }
    $user_address = $address['address'];
    $region = $address['region'];
    $city = $address['city'];
    $phone = $address['phone'];
    $notes = $address['notes'];
    $dateAddress = date("Y-m-d H:i:s", time());
    $user_id = $address['user_id'];
    $default = $address['default'];

    $sql = "INSERT INTO user_address (
              `address`,
              `region`,
              `city`,
              `phone`,
              `notes`,
              `dateAddress`,
              `user_id`,
              `default`
            ) VALUES (
              '$user_address',
              '$region',
              '$city',
              '$phone',
              '$notes',
              '$dateAddress',
              '$user_id',
              '$default'
            )";
            $query = Connection()->set($sql);

            return $query;
  }
  public function updateAddress(array $address)
  {
    if(!$address){
      return;
    }
    $user_address = $address['address'];
    $region = $address['region'];
    $city = $address['city'];
    $phone = $address['phone'];
    $notes = $address['notes'];
    $dateAddress = date("Y-m-d H:i:s", time());
    $user_id = $address['user_id'];
    $default = $address['default'];
    $address_id = $address['id'];

    $sql = "UPDATE user_address SET
            `address` = '$user_address',
            `region` = '$region',
            `city` = '$city',
            `phone` = '$phone',
            `notes` = '$notes',
            `dateAddress` = '$dateAddress',
            `user_id` = '$user_id',
            `default` = '$default'
            WHERE id = $address_id";
    $query = Connection()->set($sql);

    return $query;
  }
  public function deleteAddress($address_id)
  {
    if(!$address_id){
      return;
    }
    $address_id = intval($address_id);
    $sql = "DELETE user_address WHERE id = $address_id";

    $query = Connection()->set($sql);

    return $query;
  }

}

 ?>
