<?php
namespace Fortifi\Api\V1\Payloads;

use Packaged\Helpers\Strings;

class ConfirmTokenizedCardOrderPayload
  extends ConfirmOrderPayload
  implements \JsonSerializable
{
  protected $_cardToken;

  public function hydrate($data)
  {
    $data = (array)$data;
    parent::hydrate($data);
    if(isset($data["cardToken"]))
    {
      $this->_cardToken = $data["cardToken"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "cardToken" => $this->_cardToken,
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
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCardToken($default = null, $trim = true)
  {
    $value = $this->_cardToken ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
