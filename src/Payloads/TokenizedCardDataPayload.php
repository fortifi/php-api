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
  protected $_cardToken;
  /**
   * Card type from provider
   */
  protected $_cardType;
  /**
   * Payment Service Processor Type
   */
  protected $_paymentServiceProcessor;

  public function hydrate($data)
  {
    $data = (array)$data;
    parent::hydrate($data);
    if(isset($data["cardToken"]))
    {
      $this->_cardToken = $data["cardToken"];
    }
    if(isset($data["cardType"]))
    {
      $this->_cardType = $data["cardType"];
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
        "cardToken"               => $this->_cardToken,
        "cardType"                => $this->_cardType,
        "paymentServiceProcessor" => $this->_paymentServiceProcessor,
      ]
    );
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCardToken($value)
  {
    $this->_cardToken = $value;
    return $this;
  }

  /**
   * Card CardToken from provider
   *
   * @param mixed $default
   * @param bool  $trim Trim Value
   *
   * @return string
   */
  public function getCardToken($default = null, $trim = true)
  {
    $value = $this->_cardToken ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCardType($value)
  {
    $this->_cardType = $value;
    return $this;
  }

  /**
   * Card type from provider
   *
   * @param mixed $default
   * @param bool  $trim Trim Value
   *
   * @return string
   */
  public function getCardType($default = null, $trim = true)
  {
    $value = $this->_cardType ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * Set the Payment Service processor
   *
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
   * Get Payment Service Processor
   *
   * @param mixed $default
   * @param bool  $trim Trim Value
   *
   * @return string
   */
  public function getPaymentServiceProcessor($default = null, $trim = true)
  {
    $value = $this->_paymentServiceProcessor ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
