<?php

/**
 * class Supplier extended from Model
 */
class Supplier extends Model
{
  /**
  * @param array $supplier
  * @return bool
  */
  public function setSupplier($supplier)
  {
    if (empty($supplier)) {
      return false;
    }
    $name = $supplier['name'];
    $media_id = $supplier['media_id']?$supplier['media_id']:0;
    $description =  $supplier['description']?$supplier['description']:'';
    $address = $supplier['address']?$supplier['address']:'';

    $sql = "INSERT INTO suppliers (
              name,
              media_id,
              description,
              address
            ) VALUES (
              '$name',
              '$media_id',
              '$description',
              '$address'
            )";

    $query = Connection()->set($sql);

    return $query;
  }


  /**
  * @param array $supplier
  * @return bool
  */
  public function updateSupplier($supplier)
  {
    if (empty($supplier)) {
      return false;
    }
    $name = $supplier['name'];
    $media_id = $supplier['media_id']?$supplier['media_id']:'';
    $description =  $supplier['description']?$supplier['description']:'';
    $address = $supplier['address']?$supplier['address']:'';
    $id = $supplier['id'];
    $sql = "UPDATE suppliers SET
              name = '$name',
              media_id = '$media_id',
              description = '$description',
              address = '$address'
            WHERE id = $id
            ";

    $query = Connection()->set($sql);

    return $query;
  }

  /**
  * @param int $supplierId
  * @return bool
  */
  public function deleteSupplier($supplierId)
  {
    if (!$supplierId) {
      return false;
    }

    $sql = "DELETE FROM suppliers
            WHERE id = $supplierId
            ";

    $supplier = Connection()->set($sql);

    return $supplier;
  }


  /**
  * @param int $supplierId
  * @return array $supplier
  */
  public function getSupplier($supplierId)
  {
    if (!$supplierId) {
      return false;
    }

    $sql = "SELECT * FROM suppliers
            WHERE id = $supplierId
            ";

    $supplier = Connection()->fetchOne($sql);

    return $supplier;
  }

  /**
  * @param string $supplierName
  * @return array $supplier
  */
  public function getSupplierByName($supplierName)
  {
    if (!$supplierName) {
      return false;
    }

    $sql = "SELECT * FROM suppliers
            WHERE name = '$supplierName'
            ";

    $supplier = Connection()->fetchOne($sql);

    return $supplier;
  }

  /**
  * @return array suppliers table
  */
  public function getSupplierList()
  {
    return $this->getList('suppliers');
  }

  /**
  * @param integer $supplier_id
  * @param mixed $limit (string('all') or integer)
  * @return array $articles
  */
  public function getSupplierArticles($supplier_id, $limit = 'all')
  {
    $articles;
    $sql = "SELECT a.* FROM suppliers s
            LEFT JOIN article_attributes aa ON aa.supplier_id = s.id
            LEFT JOIN articles a ON a.id = aa.article_id
            WHERE s.id = $supplier_id";
    if ($limit == 'all') {
      $list = Connection()->fetchAll($sql);
      foreach ($list as $article) {
        $articles[] = $this->container->Articles()->getArticleById($article['id']);
      }
    }else{
      $_GET['limit'] = $limit;
      $list = Connection()->query($sql);
      foreach ($list['data'] as $article) {
        $articles['data'][] = $this->container->Articles()->getArticleById($article['id']);
      }
      $articles['pagination'] = $list['pagination'];
    }

    return $articles;
  }

  /**
  * @param integer $category_id
  * @return array $suppliers
  */
  public function getSuppliersByCategory($category_id)
  {
    $sql = "SELECT s.* FROM suppliers s
            LEFT JOIN article_attributes aa ON aa.supplier_id = s.id
            LEFT JOIN article_category ac ON ac.article_id = aa.article_id
            WHERE ac.category_id = $category_id GROUP BY s.id";
    $suppliers = Connection()->fetchAll($sql);

    return $suppliers;
  }
}


 ?>
