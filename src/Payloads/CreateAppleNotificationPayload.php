<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class CreateAppleNotificationPayload
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
   * The Raw Receipt
   * @required
   */
  protected $_rawReceipt;
  /**
   * The decoded raw receipt
   */
  protected $_data;
  /**
   * The price of the subscription
   * @required
   */
  protected $_price;
  /**
   * The currency code of the subscription
   * @required
   */
  protected $_currencyCode;
  /**
   * The country code of the subscription
   * @required
   */
  protected $_countryCode;
  /**
   * The notification UUID
   * @required
   */
  protected $_notificationUUID;
  /**
   * The original transaction ID to link receipts
   * @required
   */
  protected $_originalTransactionId;

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
    if(isset($data["rawReceipt"]))
    {
      $this->_rawReceipt = (string)$data["rawReceipt"];
    }
    if(isset($data["data"]))
    {
      $this->_data = (string)$data["data"];
    }
    if(isset($data["price"]))
    {
      $this->_price = (string)$data["price"];
    }
    if(isset($data["currencyCode"]))
    {
      $this->_currencyCode = (string)$data["currencyCode"];
    }
    if(isset($data["countryCode"]))
    {
      $this->_countryCode = (string)$data["countryCode"];
    }
    if(isset($data["notificationUUID"]))
    {
      $this->_notificationUUID = (string)$data["notificationUUID"];
    }
    if(isset($data["originalTransactionId"]))
    {
      $this->_originalTransactionId = (string)$data["originalTransactionId"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "subscriptionId"        => $this->_subscriptionId,
      "packageName"           => $this->_packageName,
      "notificationType"      => $this->_notificationType,
      "rawReceipt"            => $this->_rawReceipt,
      "data"                  => $this->_data,
      "price"                 => $this->_price,
      "currencyCode"          => $this->_currencyCode,
      "countryCode"           => $this->_countryCode,
      "notificationUUID"      => $this->_notificationUUID,
      "originalTransactionId" => $this->_originalTransactionId,
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
  public function setRawReceipt(?string $value)
  {
    $this->_rawReceipt = $value;
    return $this;
  }

  /**
   * The Raw Receipt
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getRawReceipt($default = null, $trim = true)
  {
    $value = $this->_rawReceipt ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setData(?string $value)
  {
    $this->_data = $value;
    return $this;
  }

  /**
   * The decoded raw receipt
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getData($default = null, $trim = true)
  {
    $value = $this->_data ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPrice(?string $value)
  {
    $this->_price = $value;
    return $this;
  }

  /**
   * The price of the subscription
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPrice($default = null, $trim = true)
  {
    $value = $this->_price ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCurrencyCode(?string $value)
  {
    $this->_currencyCode = $value;
    return $this;
  }

  /**
   * The currency code of the subscription
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCurrencyCode($default = null, $trim = true)
  {
    $value = $this->_currencyCode ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCountryCode(?string $value)
  {
    $this->_countryCode = $value;
    return $this;
  }

  /**
   * The country code of the subscription
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCountryCode($default = null, $trim = true)
  {
    $value = $this->_countryCode ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setNotificationUUID(?string $value)
  {
    $this->_notificationUUID = $value;
    return $this;
  }

  /**
   * The notification UUID
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getNotificationUUID($default = null, $trim = true)
  {
    $value = $this->_notificationUUID ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setOriginalTransactionId(?string $value)
  {
    $this->_originalTransactionId = $value;
    return $this;
  }

  /**
   * The original transaction ID to link receipts
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getOriginalTransactionId($default = null, $trim = true)
  {
    $value = $this->_originalTransactionId ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
