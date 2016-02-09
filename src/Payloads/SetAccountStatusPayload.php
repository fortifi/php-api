<?php
namespace Fortifi\Api\V1\Payloads;

class SetAccountStatusPayload
  implements \JsonSerializable
{
  /**
   * Account Status
   */
  protected $_accountStatus;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["accountStatus"]))
    {
      $this->_accountStatus = $data["accountStatus"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "accountStatus" => $this->_accountStatus,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setAccountStatus($value)
  {
    $this->_accountStatus = $value;
    return $this;
  }

  /**
   * Account Status
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAccountStatus($default = null, $trim = true)
  {
    $value = $this->_accountStatus ?: $default;
    return $trim ? trim($value) : $value;
  }
}
