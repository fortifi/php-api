<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class CreateGoogleNotificationPayload
  implements \JsonSerializable
{
  /**
   * The subscription ID (SKU). e.g com.company.android.year.12
   * @required
   */
  protected $_subscriptionId;
  /**
   * The package name of the application e.g com.company.android
   * @required
   */
  protected $_packageName;
  /**
   * The type of notification AppStoreNotificationType
   * @required
   */
  protected $_notificationType;
  /**
   * The purchase token
   * @required
   */
  protected $_purchaseToken;
  protected $_renewalDate;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["subscriptionId"]))
    {
      $this->_subscriptionId = (string)$data["subscriptionId"];
    }
    if(isset($data["packageName"]))
    {
      $this->_packageName = (string)$data["packageName"];
    }
    if(isset($data["notificationType"]))
    {
      $this->_notificationType = (string)$data["notificationType"];
    }
    if(isset($data["purchaseToken"]))
    {
      $this->_purchaseToken = (string)$data["purchaseToken"];
    }
    if(isset($data["renewalDate"]))
    {
      $this->_renewalDate = (string)$data["renewalDate"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "subscriptionId"   => $this->_subscriptionId,
      "packageName"      => $this->_packageName,
      "notificationType" => $this->_notificationType,
      "purchaseToken"    => $this->_purchaseToken,
      "renewalDate"      => $this->_renewalDate,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSubscriptionId(?string $value)
  {
    $this->_subscriptionId = $value;
    return $this;
  }

  /**
   * The subscription ID (SKU). e.g com.company.android.year.12
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSubscriptionId($default = null, $trim = true)
  {
    $value = $this->_subscriptionId ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPackageName(?string $value)
  {
    $this->_packageName = $value;
    return $this;
  }

  /**
   * The package name of the application e.g com.company.android
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPackageName($default = null, $trim = true)
  {
    $value = $this->_packageName ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setNotificationType(?string $value)
  {
    $this->_notificationType = $value;
    return $this;
  }

  /**
   * The type of notification AppStoreNotificationType
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getNotificationType($default = null, $trim = true)
  {
    $value = $this->_notificationType ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPurchaseToken(?string $value)
  {
    $this->_purchaseToken = $value;
    return $this;
  }

  /**
   * The purchase token
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPurchaseToken($default = null, $trim = true)
  {
    $value = $this->_purchaseToken ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setRenewalDate(?string $value)
  {
    $this->_renewalDate = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getRenewalDate($default = null, $trim = true)
  {
    $value = $this->_renewalDate ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
