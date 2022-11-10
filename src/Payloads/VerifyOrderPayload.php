<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class VerifyOrderPayload
  extends ConfirmOrderPayload
  implements \JsonSerializable
{
  protected $_successUrl;
  protected $_cancelUrl;
  protected $_failUrl;

  public function hydrate($data)
  {
    $data = (array)$data;
    parent::hydrate($data);
    if(isset($data["successUrl"]))
    {
      $this->_successUrl = (string)$data["successUrl"];
    }
    if(isset($data["cancelUrl"]))
    {
      $this->_cancelUrl = (string)$data["cancelUrl"];
    }
    if(isset($data["failUrl"]))
    {
      $this->_failUrl = (string)$data["failUrl"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "successUrl" => $this->_successUrl,
        "cancelUrl"  => $this->_cancelUrl,
        "failUrl"    => $this->_failUrl,
      ]
    );
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSuccessUrl(?string $value)
  {
    $this->_successUrl = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSuccessUrl($default = null, $trim = true)
  {
    $value = $this->_successUrl ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCancelUrl(?string $value)
  {
    $this->_cancelUrl = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCancelUrl($default = null, $trim = true)
  {
    $value = $this->_cancelUrl ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setFailUrl(?string $value)
  {
    $this->_failUrl = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getFailUrl($default = null, $trim = true)
  {
    $value = $this->_failUrl ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
