<?
/**
 * contact Controller
 */
class contactController extends Controller
{

  public function index()
  {
    // code...
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

    if (isset($_REQUEST['email']))  {

		$request = $this->getRequest()->post;
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
		<p><b>Contact phone :".$phone."</b></p>
		<p><b>Contact email :".$from."</b></p>
		</body>
		</html>
		";

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From:'.$from . "\r\n";
		$headers .= 'Cc: eurobaza.am' . "\r\n";

		mail($to,$subject,$message,$headers);

    }else{
    	$this->setMessage('error', 'notMessage');
    	redirect($_SERVER['HTTP_REFERER']);
    }
    	$this->View()->setMessage('success', 'send');
    	redirect($_SERVER['HTTP_REFERER']);
  }


}

?>
