<?php
namespace Fortifi\Api\Core\ApiDefinition;

class DocumentationDefinition
{
  protected $_description;
  protected $_url;

  /**
   * @return mixed
   */
  public function getDescription()
  {
    return $this->_description;
  }

  /**
   * @param mixed $_description
   *
   * @return DocumentationDefinition
   */
  public function setDescription($_description)
  {
    $this->_description = $_description;
    return $this;
  }

  /**
   * @return mixed
   */
  public function getUrl()
  {
    return $this->_url;
  }

  /**
   * @param mixed $_url
   *
   * @return DocumentationDefinition
   */
  public function setUrl($_url)
  {
    $this->_url = $_url;
    return $this;
  }

}
