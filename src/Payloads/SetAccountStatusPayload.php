<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

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
      $this->_accountStatus = (string)$data["accountStatus"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "accountStatus" => $this->_accountStatus,
    ];
  }

  const ACCOUNT_STATUS_SETUP = 'setup';
  const ACCOUNT_STATUS_ACTIVE = 'active';
  const ACCOUNT_STATUS_SUSPENDED = 'suspended';
  const ACCOUNT_STATUS_EXPIRED = 'expired';
  const ACCOUNT_STATUS_CANCELLED = 'cancelled';

  /**
   * @param string $value setup, active, suspended, expired, cancelled
   *
   * @return $this
   */
  public function setAccountStatus(?string $value)
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
    return $trim ? Strings::ntrim($value) : $value;
  }
}
