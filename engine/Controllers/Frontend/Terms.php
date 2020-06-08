<?
class termsController extends Controller
{

	public function index()
	{

	}

	public function deliveryTerms()
	{
		$this->route = "dlterms";
		$category = $this->__get('Categories')->getCategoryById(32);

		$this->View()->setAssign('title', $category['name']);
		$this->View()->setAssign('Categories.content',$category);
	}

	public function returnPolicy()
	{
		$this->route = "returnPolicy";
		$category= $this->__get('Categories')->getCategoryById(33);

		$this->View()->setAssign('title', $category['name']);
		$this->View()->setAssign('Categories.content',$category);
	}
}

?>
