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

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "accountType" => $this->_accountType,
    ];
  }

  const ACCOUNT_TYPE_UNKNOWN = 'unknown';
  const ACCOUNT_TYPE_STUDENT = 'student';
  const ACCOUNT_TYPE_CHARITY = 'charity';
  const ACCOUNT_TYPE_BUSINESS = 'business';
  const ACCOUNT_TYPE_RESIDENTIAL = 'residential';
  const ACCOUNT_TYPE_ENTERPRISE = 'enterprise';
  const ACCOUNT_TYPE_GROUP = 'group';

  /**
   * @param string $value unknown, student, charity, business, residential, enterprise, group
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
