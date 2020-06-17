<?
/**
 * contact Controller
 */
class contactController extends Controller
{

  public function index()
  {
    $location = $this->__get('Core')->getItem('location')['content'];
    $this->View()->setAssign('location', $location);
  }

  public function newsletter()
  {
    $email = $this->getRequest()->post['email'];

    $this->__get('Users')->addSubscribeToNewsletter($email);

    $this->View()->setMessage('success', 'added');
    redirect($_SERVER['HTTP_REFERER']);
  }

  public function send()
  {
    $request = $this->getRequest()->request;

    if (!empty($request['email']) && !empty($request['name']) && !empty($request['message']))  {
		$to = $this->View()->translating('emailAddress');
		$from = $request['email'];
		$message = $request['message'];
		$phone = $request['number'];
		$subject = "You have new message from ". $request['name'];

		$message = "
		<html>
		<head>
		<title>New Email From". $from. "</title>
		</head>
		<body>
		<p>".$message."</p>
		<p><b>Contact email :".$from."</b></p>
		</body>
		</html>
		";

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From:'.$from . "\r\n";
		$headers .= 'Cc: 1shop.am' . "\r\n";

		mail($to,$subject,$message,$headers);

    }else{
    	$this->View()->setMessage('error', 'contactFields');
      Router::redirect('contact');
    }
  	$this->View()->setMessage('success', 'send');
    Router::redirect('contact');
  }


}

?>
