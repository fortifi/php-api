<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class StartInteractionPayload
  extends UpdateInteractionPayload
  implements \JsonSerializable
{
  protected $_contactFid;
  protected $_dataNodeFid;

  public function hydrate($data)
  {
    $data = (array)$data;
    parent::hydrate($data);
    if(isset($data["contactFid"]))
    {
      $this->_contactFid = (string)$data["contactFid"];
    }
    if(isset($data["dataNodeFid"]))
    {
      $this->_dataNodeFid = (string)$data["dataNodeFid"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "contactFid"  => $this->_contactFid,
        "dataNodeFid" => $this->_dataNodeFid,
      ]
    );
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setContactFid(?string $value)
  {
    $this->_contactFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getContactFid($default = null, $trim = true)
  {
    $value = $this->_contactFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setDataNodeFid(?string $value)
  {
    $this->_dataNodeFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDataNodeFid($default = null, $trim = true)
  {
    $value = $this->_dataNodeFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
