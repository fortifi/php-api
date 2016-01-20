<?php
namespace Fortifi\Api\V1\Payloads;

class CreatePolymerPayload
  implements \JsonSerializable
{
  /**
   * Code for polymer type
   */
  protected $_polymerCode;
  /**
   * Display name for this polymer
   */
  protected $_name;
  /**
   * Fid for the parent of this polymer e.g. customerFid
   */
  protected $_parentFid;
  /**
   * Description for this polymer
   */
  protected $_description;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["polymerCode"]))
    {
      $this->_polymerCode = $data["polymerCode"];
    }
    if(isset($data["name"]))
    {
      $this->_name = $data["name"];
    }
    if(isset($data["parentFid"]))
    {
      $this->_parentFid = $data["parentFid"];
    }
    if(isset($data["description"]))
    {
      $this->_description = $data["description"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "polymerCode" => $this->_polymerCode,
      "name"        => $this->_name,
      "parentFid"   => $this->_parentFid,
      "description" => $this->_description,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPolymerCode($value)
  {
    $this->_polymerCode = $value;
    return $this;
  }

  /**
   * Code for polymer type
   *
   * @param mixed $default
   *
   * @return string
   */
  public function getPolymerCode($default = null)
  {
    return $this->_polymerCode ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setName($value)
  {
    $this->_name = $value;
    return $this;
  }

  /**
   * Display name for this polymer
   *
   * @param mixed $default
   *
   * @return string
   */
  public function getName($default = null)
  {
    return $this->_name ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setParentFid($value)
  {
    $this->_parentFid = $value;
    return $this;
  }

  /**
   * Fid for the parent of this polymer e.g. customerFid
   *
   * @param mixed $default
   *
   * @return string
   */
  public function getParentFid($default = null)
  {
    return $this->_parentFid ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setDescription($value)
  {
    $this->_description = $value;
    return $this;
  }

  /**
   * Description for this polymer
   *
   * @param mixed $default
   *
   * @return string
   */
  public function getDescription($default = null)
  {
    return $this->_description ?: $default;
  }
}
