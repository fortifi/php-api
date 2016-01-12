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
   *
   * @return string
   */
  public function getAccountStatus($default = null)
  {
    return $this->_accountStatus ?: $default;
  }
}
