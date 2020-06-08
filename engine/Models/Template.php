<?php


/**
 *
 */
class Template extends Model
{


  /**
  * @param integer $templateId
  * @return array $template
  */
  public function getTemplateById($templateId)
  {
    if (!$templateId) {
      return;
    }
    $sql = "SELECT * FROM templates WHERE id = '$templateId'";

    $template = Connection()->fetchOne($sql);
    return $template;
  }

  /**
  * @param string $templateName
  * @return array $template
  */
  public function getTemplateByName($templateName)
  {
    if (!$templateName) {
      return;
    }
    $sql = "SELECT * FROM templates WHERE name = '$templateName'";

    $template = Connection()->fetchOne($sql);
    $template['media'] = $this->container->Media()->getMedia($template['media_id']);
    return $template;
  }
}
 ?>
