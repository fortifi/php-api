<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class SetAccountTypePayload
  implements \JsonSerializable
{
  /**
   * Account Type
   */
  protected $_accountType;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["accountType"]))
    {
      $this->_accountType = (string)$data["accountType"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "accountType" => $this->_accountType,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setAccountType(?string $value)
  {
    $this->_accountType = $value;
    return $this;
  }

  /**
   * Account Type
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAccountType($default = null, $trim = true)
  {
    $value = $this->_accountType ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
