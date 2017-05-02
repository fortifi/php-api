<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class TokenizedCardDataPayload
  extends AbstractCardDataPayload
  implements \JsonSerializable
{
  /**
   * Card token from provider
   */
  protected $_token;
  /**
   * Card type from provider
   */
  protected $_type;
  /**
   * Payment Service Processor Type
   */
  protected $_paymentServiceProcessor;

  public function hydrate($data)
  {
    $data = (array)$data;
    parent::hydrate($data);
    if(isset($data["token"]))
    {
      $this->_token = $data["token"];
    }
    if(isset($data["type"]))
    {
      $this->_type = $data["type"];
    }
    if(isset($data["paymentServiceProcessor"]))
    {
      $this->_paymentServiceProcessor = $data["paymentServiceProcessor"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "token"                   => $this->_token,
        "type"                    => $this->_type,
        "paymentServiceProcessor" => $this->_paymentServiceProcessor,
      ]
    );
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setToken($value)
  {
    $this->_token = $value;
    return $this;
  }

  /**
   * Card token from provider
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getToken($default = null, $trim = true)
  {
    $value = $this->_token ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setType($value)
  {
    $this->_type = $value;
    return $this;
  }

  /**
   * Card type from provider
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getType($default = null, $trim = true)
  {
    $value = $this->_type ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPaymentServiceProcessor($value)
  {
    $this->_paymentServiceProcessor = $value;
    return $this;
  }

  /**
   * Payment Service Processor Type
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPaymentServiceProcessor($default = null, $trim = true)
  {
    $value = $this->_paymentServiceProcessor ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
