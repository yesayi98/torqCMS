<?php

/**
 * Mailer class send to mail
 * @param array $lang current language data
 * @param object Container $container
 * @param object View $view
 */
class Mailer
{

  private $template;

  function __construct($view, $lang)
  {
    $this->lang = $lang;
    $this->view = $view;
    $this->container = Container();
    $this->sitemame = Container()->Core()->getItem('sitename')['content'];
    $this->baseurl = BASE_URL;
  }

  public function createMailTemplate($tamplateName)
  {
    $templatePath = DOCUMENT_ROOT.'/templates/'.mb_strtolower($this->lang['short_code']).'/'.$tamplateName.'.tpl';
    $template;
    $template['name'] = $tamplateName;
    $template['content'] = file_get_contents($templatePath);
    $template['path'] = $templatePath;
    $this->template = $template;
  }

  public function setMailParams($data)
  {
    $template = $this->template;

    $templateData = $this->container->Template()->getTemplateByName($template['name']);
    $templateVars = explode(';', $templateData['variables']);

    $template['content'] = str_replace('{sitename}', $this->sitemame, $template['content']);
    $template['content'] = str_replace('{baseurl}', $this->baseurl, $template['content']);
    $template['content'] = str_replace('{headerImage}', $templateData['media']['path'], $template['content']);

    foreach ($templateVars as $key => $value) {
      $template['content'] = str_replace('{'.$value.'}', $data[$value], $template['content']);
    }
    $this->template = $template;
  }


  public function getMailTemplate()
  {
    return $this->template;
  }


  public function send($user, $message = null)
  {
    if (!$message) {
      $message = $this->template['content'];
    }

    if (!$message) {
      return;
    }
    $to = $user['email'];
    $from = $this->view->translating('emailAddress');
		$subject = $this->view->translating($this->template['name']).' '.$user['name'];

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From:'.$from . "\r\n";
		$headers .= 'Cc: '.$this->sitemame. "\r\n";

		mail($to,$subject,$message,$headers);
  }

}


 ?>
