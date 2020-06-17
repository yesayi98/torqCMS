<?
/**
 * account Controller
 */
class accountController extends Controller
{

  public function index()
  {
    if (!Container()->getCurrentUser()) {
      Router::redirect('account/register');
    }

    $user = $this->__get('Users')->getUser(Container()->getCurrentUser()['id']);
    $_GET['limit'] = 10;
    $userOrders = $this->__get('Orders')->getOrdersByUserId($user['id']);
    // if ($user['confirmed'] != 1) {
    //   Router::redirect('account/confirmation');
    // }
    $this->View()->setAssign('user', $user);
    $this->View()->setAssign('orders', $userOrders);
    $this->View()->setAssign('title', $this->View()->translating('account'));
  }

  // user login action
  public function login()
  {
    // checking current user
    // if user exist redirect to account page
    if (Container()->getSession('user')) {
        Router::redirect('account');
    }
    // checking if set session redirect
    $redirect = Container()->getSession('redirect');

    // checking post request
    if (isset($this->getRequest()->post)) {
      $user;
      // get request post data
      $request = $this->getRequest()->post;

      // setting user params
      $user['password'] = $request['password'];
      $user['email'] = $request['email'];

      // getting user model
      $userModel = $this->__get('Users');
      // login the user
      // returns user id
      $user = $userModel->loginUser($user);

      // if isset false data
      if (empty($user)) {
        $this->View()->setMessage('error', 'falseData');
        return;
      }

      // getting current user
      $user = $userModel->getUser($user);
      // save user in the session
      if (isset($request['remember'])) {
        Container()->setCookie('user', $user);
      }else{
        Container()->setSession('user', $user);
      }
      // update shop wishlist and basket informations
      $this->updateShopInfo($user);

      // if isset redirect from session
      if (!empty($redirect)) {
        // removing session redirect
        Container()->setSession('redirect', '');

        // redirect to session redirect url
        Router::redirect($redirect);
      }

      // redirecting to user account page
      Router::redirect('account');
    }

    // setting page post_title
    $this->View()->setAssign('title', $this->View()->translating('loginRegister'));

  }

  // user register action
  public function register()
  {
    // getting user model
    $userModel = $this->__get('Users');
    // getting and handle reqiuest post data
    if (isset($this->getRequest()->post['guest'])) {
      // if current user is guest
      $this->setGuestUser();
    }elseif (isset($this->getRequest()->post)) {
      // getting post request
      $request = $this->getRequest()->post;
      // if not set password

      if ($request['password'] == '') {
        $this->View()->setMessage('error', 'password');
        Router::redirect('frontend/account/register');
        return;
      }

      // user validation
      $user = $this->validateUser();

      // checking user email
      $notexist = $userModel->checkUser($user);
      // if email exist
      if ($notexist !== true) {
        // setting error message from frontend
        $this->View()->setMessage('error', $notexist['errorMessage'][0]);
        Router::redirect('frontend/account/register');
        return;
      }

      // setting the new user
      $result = $userModel->setUser($user);

      if ($result) {
        // setting the succes message
        $this->View()->setMessage('success', 'register');
        // getting user id
        $userId = $userModel->getInsertedId();
        // unseting password
        unset($user['password']);


        // save user in the session
        $user = $userModel->getUser($userId);
        Container()->setCookie('user', $user);
        Container()->setSession('user', $user);

      }
      // update shop wishlist and basket informations
      $this->updateShopInfo($user);
    }

    // getting user from session
    if (Container()->getSession('user') || Container()->getCookie('user')) {
      $user = Container()->getSession('user');
      // get from cookie
      if (empty($user)) {
        $user = Container()->getCookie('user');
      }

      // getting current language from front
      $currentLang = $this->View()->getAssign('currentLang');
      // getting View object (MVC - View)
      $view = $this->View();

      // creating mail
      // get mailer
      $mailer = new Mailer($view, $currentLang);
      // get mail template
      $mailer->createMailTemplate('email_confirmation');

      // setting the mail data
      // see in the templates table
      $data = [];
      $data['token'] = md5($user['email']);
      $data['useremail'] = $user['email'];
      $data['facebooklink'] = $view->translating('facebook');
      $data['instagramlink'] = $view->translating('instagram');
      // adding users confirmation field
      $this->addConfirmation($data);

      // setting template params
      $mailer->setMailParams($data);
      // sending the message
      $mailer->send($user);


      //redirecting to an account page
      Router::redirect('account');
    }

    // setting template for page loading
    $this->route = 'frontend/account/login';

    // setting page post_title
    $this->View()->setAssign('title', $this->View()->translating('loginRegister'));
  }

  // adding user confirmation
  private function addConfirmation($confirmation)
  {
    $userModel = $this->__get('Users');
    $userConfirmnation = $userModel->addUserConfirmation($confirmation);
  }

  private function updateConfirmation($confirmation)
  {
    $userModel = $this->__get('Users');

    $userConfirmnation = $userModel->getUserConfirmation($confirmation['token']);

    if ($userConfirmnation) {
      $userModel->updateUserConfirmation(Container()->getSession('user')['email']);
    }
  }

  public function logout()
  {
    Container()->setSession('user', []);
    Container()->setCookie('user', []);
    Container()->destroySession();
    Router::redirect('index');
  }

  public function changedata()
  {
    $userModel = $this->__get('Users');

    if (isset($this->getRequest()->post)) {

      $user = $this->validateUser();
      if ($user['password'] == '') {
        unset($user['password']);
        unset($user['re_password']);
      }

      $sessionUser = Container()->getSession('user');
      $user['id'] = $sessionUser['id'];
      $notexist = $userModel->checkUser($user);
      if ($notexist !== true) {
        $user['email'] = $sessionUser['email'];
      }

      $result = $userModel->updateUser($user);


      if ($result) {
        $this->View()->setMessage('success', 'changed');
        $userId = $sessionUser['id'];
        unset($user['password']);
        unset($user['re_password']);
        $user['id'] = $userId;
        if ($user['id']) {
          Container()->setSession('user', $user);
        }else{
          $this->View()->setMessage('error', 'something');
        }
        $this->updateShopInfo($user);
      }else{
        $this->View()->setMessage('error', 'something');
      }


    }
    Router::redirect('account');

  }

    public function remindpassword()
    {

      $request = $this->getRequest()->post;
      if ($request) {
        $userEmail = $request['email'];
        $sql = "SELECT * FROM users WHERE email = '$userEmail'";

        $user = Connection()->fetchOne($sql);

        if (!$user) {
          $this->setMessage('error', 'emailnotexist');
          unset($this->getRequest()->post);
          Router::redirect('account/remindpassword');
        }
        $this->view->setSession('forgotuserid', $user['id']);
        Router::redirect('account/newPassword');
      }

    }

    public function newPassword()
    {
      $this->route = "frontend/account/remindpassword";

      $request = $this->getRequest()->post;
      if ($request) {
        $userid = $this->view->getSession('forgotuserid');

        $user = $this->__get('Users')->getUser($userid);
        if ($request['password'] && $request['password'] == $request['re_password']) {

          $user['password'] = $request['password'];
          $this->__get('Users')->updateUser($user);

         Router::redirect('login');
        }
      }
      $this->View()->setAssign('title', $this->View()->translating('newPassword'));

    }


  public function validateUser()
  {

    $userModel = $this->__get('Users');

    $request = $this->getRequest()->post;
    $user = [];

    if ($request['password'] === $request['re_password']) {
      $user['password'] = $request['password'];
    }else{
      $this->View()->setMessage('error', 'passwordnotmatch');
      Router::redirect('frontend/account/register');
      return;
    }

    if ($request['name'] == '') {
      $this->View()->setMessage('error', 'name');
      Router::redirect('frontend/account/register');
      return;
    }

    $user['name'] = $request['name'];


    if ($request['lastname'] == '') {
      $this->View()->setMessage('error', 'lastname');
      Router::redirect('frontend/account/register');
      return;
    }

    $user['lastname'] = $request['lastname'];

    if ($request['email'] == '') {
      $this->View()->setMessage('error', 'email');
      Router::redirect('frontend/account/register');
      return;
    }

    $user['email'] = $request['email'];

    return $user;
  }

  private function updateShopInfo($user)
  {
    $this->__get('Basket')->updateBySession($user['id']);
    $this->__get('Wishlist')->updateBySession($user['id']);
  }

  private function setGuestUser()
  {
    $user;
    $user['guest'] = 1;
    $userModel = $this->__get('Users');
    $result = $userModel->setUser($user);
    if ($result) {
      $userId = $userModel->getInsertedId();
      $user['id'] = $userId;
      Container()->setSession('user', $user);
    }

    $this->updateShopInfo($user);
    $redirect = Container()->getSession('redirect');
    Router::redirect($redirect);

  }

  public function confirmation()
  {
    $request = $this->getRequest()->request;
    if(isset($request['token'])) {
        if ($request['PHPSESSID'] === session_id()){
          $this->updateConfirmation($request);
          Router::redirect('account');
        }else{
          $this->View()->setMessage('error', 'sessionId');
        }
    }
    $this->View()->setAssign('title', $this->View()->translating('confirmation'));
    $this->route = "frontend/account/confirmation";
  }
}

?>
