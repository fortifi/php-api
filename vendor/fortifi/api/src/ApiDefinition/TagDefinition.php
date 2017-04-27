<?php
namespace Fortifi\Api\Core\ApiDefinition;

class TagDefinition
{
  protected $_name;
  protected $_description;

  /**
   * @return mixed
   */
  public function getName()
  {
    return $this->_name;
  }

  /**
   * @param mixed $_name
   *
   * @return TagDefinition
   */
  public function setName($_name)
  {
    $this->_name = $_name;
    return $this;
  }

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
   * @return TagDefinition
   */
  public function setDescription($_description)
  {
    $this->_description = $_description;
    return $this;
  }

}
