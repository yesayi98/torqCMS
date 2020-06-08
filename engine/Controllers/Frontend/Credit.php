<?
class creditController extends Controller
{
  private $creditSpecId;
  private $creditUsername;
  private $creditCategoryId = 4;
  public function index()
  {
    $category = $this->__get('Categories')->getCategoryById($this->creditCategoryId);

    $view = $this->View();
    $view->setAssign('title', $category['name']);
    $view->setAssign('Categories.content', $category);
  }

  private $creditInitUrl = "https://authapistest.ameriabank.am/";
  private $creditMainUrl = "https://customertest.ameriabank.am/api/loan";

  public function init()
  {
    try {
      $openIdClient = new \Jumbojett\OpenIDConnectClient($this->creditInitUrl, "220volt", "58A0BEF3-3E9C-4919-9D8E-27959E501B961382C4A6-63BC-4A0F-8687-9A34FCAA424A");
      $openIdClient->providerConfigParam(array('token_endpoint'=>$this->creditInitUrl.'connect/token'));
      $openIdClient->setVerifyPeer(false);
      $openIdClient->addScope("loanApplicationApi");
      $token = $openIdClient->requestClientCredentialsToken();
      $mainToken = $token->access_token;
      // var_dump($mainToken);exit;
      $this->getAppilication($mainToken);
    }

    catch (\Exception $exception){
      var_dump("exception");
      var_dump($exception);exit;
    }
  }

  private function getAppilication($mainToken='')
  {
    if (empty($mainToken)) {
      return;
    }

    $ch = curl_init();
    $headers = array(
        'Accept: application/json',
        'Content-Type: application/json',
        'Authorization: Bearer'
        );
        var_dump($this->creditMainUrl."/Directory/IdDocumentTypes?token=$mainToken");exit;
    curl_setopt($ch, CURLOPT_URL, $this->$creditMainUrl."/Directory/IdDocumentTypes?token=$mainToken");
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $server_output = curl_exec($ch);
    $output_error = curl_error($ch);
    curl_close($ch);

    if (!empty($output_error)) {
      var_dump($output_error);exit;
    }
    var_dump($server_output);exit;
  }


}

?>
