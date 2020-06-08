<?
class aboutController extends Controller
{

  public function index()
  {
    $sql = "SELECT * FROM categories WHERE type = 'about'";
    $aboutContent = Connection()->fetchOne($sql);
    // var_dump($aboutContent);exit;
    $this->View()->setAssign('categories.content', $aboutContent);
  }

}

?>
