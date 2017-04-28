<?php
namespace Fortifi\Api\V1\Payloads;

use Packaged\Helpers\Strings;

class CardDataPayload
  extends AbstractCardDataPayload
  implements \JsonSerializable
{
  /**
   * Card number encrypted using your public key
   */
  protected $_encryptedCardNumber;

  public function hydrate($data)
  {
    $data = (array)$data;
    parent::hydrate($data);
    if(isset($data["encryptedCardNumber"]))
    {
      $this->_encryptedCardNumber = $data["encryptedCardNumber"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "encryptedCardNumber" => $this->_encryptedCardNumber,
      ]
    );
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setEncryptedCardNumber($value)
  {
    $this->_encryptedCardNumber = $value;
    return $this;
  }

  /**
   * Card number encrypted using your public key
   *
   * @param mixed $default
   * @param bool  $trim Trim Value
   *
   * @return string
   */
  public function getEncryptedCardNumber($default = null, $trim = true)
  {
    $value = $this->_encryptedCardNumber ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
