<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class StartRetentionFlowPayload
  extends ActionableRetentionFlowPayload
  implements \JsonSerializable
{
  protected $_selectorFid;
  protected $_selectorKey;
  protected $_cancelFunnelFid;
  protected $_initiatedByFid;

  public function hydrate($data)
  {
    $data = (array)$data;
    parent::hydrate($data);
    if(isset($data["selectorFid"]))
    {
      $this->_selectorFid = (string)$data["selectorFid"];
    }
    if(isset($data["selectorKey"]))
    {
      $this->_selectorKey = (string)$data["selectorKey"];
    }
    if(isset($data["cancelFunnelFid"]))
    {
      $this->_cancelFunnelFid = (string)$data["cancelFunnelFid"];
    }
    if(isset($data["initiatedByFid"]))
    {
      $this->_initiatedByFid = (string)$data["initiatedByFid"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "selectorFid"     => $this->_selectorFid,
        "selectorKey"     => $this->_selectorKey,
        "cancelFunnelFid" => $this->_cancelFunnelFid,
        "initiatedByFid"  => $this->_initiatedByFid,
      ]
    );
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSelectorFid(?string $value)
  {
    $this->_selectorFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSelectorFid($default = null, $trim = true)
  {
    $value = $this->_selectorFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSelectorKey(?string $value)
  {
    $this->_selectorKey = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSelectorKey($default = null, $trim = true)
  {
    $value = $this->_selectorKey ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCancelFunnelFid(?string $value)
  {
    $this->_cancelFunnelFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCancelFunnelFid($default = null, $trim = true)
  {
    $value = $this->_cancelFunnelFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setInitiatedByFid(?string $value)
  {
    $this->_initiatedByFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getInitiatedByFid($default = null, $trim = true)
  {
    $value = $this->_initiatedByFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
