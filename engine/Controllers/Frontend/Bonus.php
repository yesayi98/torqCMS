<?
class bonusController extends Controller
{
	 public function index()
		{
			$category = $this->__get('Categories')->getCategoryById(5);
			$this->View()->setAssign('Categories.content', $category);
		}
}

?>