<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class UpsertDevicePayload
  implements \JsonSerializable
{
  protected $_pushSource;
  protected $_pushAuth;
  /**
   * The type of device
   */
  protected $_deviceType;
  /**
   * The name of the device
   */
  protected $_deviceName;
  /**
   * The version of the device
   */
  protected $_deviceVersion;
  /**
   * The manufacturer of the device
   */
  protected $_manufacturer;
  /**
   * The operating system of the device
   */
  protected $_os;
  /**
   * The version of the operating system
   */
  protected $_osVersion;
  /**
   * The width of the device screen
   */
  protected $_screenWidth;
  /**
   * The height of the device screen
   */
  protected $_screenHeight;
  /**
   * The application running on the device (required)
   * @required
   */
  protected $_app;
  /**
   * The version of the application
   */
  protected $_appVersion;
  /**
   * The customer FID (required one of customerFid or contactFid)
   */
  protected $_customerFid;
  /**
   * The contact FID (required one of customerFid or contactFid)
   */
  protected $_contactFid;
  /**
   * The subscription FID
   */
  protected $_subscriptionFid;
  protected $_pushStatus;
  protected $_pushRate;
  /**
   * The hardware id of the device (required)
   * @required
   */
  protected $_hardwareId;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["pushSource"]))
    {
      $this->_pushSource = (string)$data["pushSource"];
    }
    if(isset($data["pushAuth"]))
    {
      $this->_pushAuth = (string)$data["pushAuth"];
    }
    if(isset($data["deviceType"]))
    {
      $this->_deviceType = (string)$data["deviceType"];
    }
    if(isset($data["deviceName"]))
    {
      $this->_deviceName = (string)$data["deviceName"];
    }
    if(isset($data["deviceVersion"]))
    {
      $this->_deviceVersion = (string)$data["deviceVersion"];
    }
    if(isset($data["manufacturer"]))
    {
      $this->_manufacturer = (string)$data["manufacturer"];
    }
    if(isset($data["os"]))
    {
      $this->_os = (string)$data["os"];
    }
    if(isset($data["osVersion"]))
    {
      $this->_osVersion = (string)$data["osVersion"];
    }
    if(isset($data["screenWidth"]))
    {
      $this->_screenWidth = (int)$data["screenWidth"];
    }
    if(isset($data["screenHeight"]))
    {
      $this->_screenHeight = (int)$data["screenHeight"];
    }
    if(isset($data["app"]))
    {
      $this->_app = (string)$data["app"];
    }
    if(isset($data["appVersion"]))
    {
      $this->_appVersion = (string)$data["appVersion"];
    }
    if(isset($data["customerFid"]))
    {
      $this->_customerFid = (string)$data["customerFid"];
    }
    if(isset($data["contactFid"]))
    {
      $this->_contactFid = (string)$data["contactFid"];
    }
    if(isset($data["subscriptionFid"]))
    {
      $this->_subscriptionFid = (string)$data["subscriptionFid"];
    }
    if(isset($data["pushStatus"]))
    {
      $this->_pushStatus = (string)$data["pushStatus"];
    }
    if(isset($data["pushRate"]))
    {
      $this->_pushRate = (string)$data["pushRate"];
    }
    if(isset($data["hardwareId"]))
    {
      $this->_hardwareId = (string)$data["hardwareId"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "pushSource"      => $this->_pushSource,
      "pushAuth"        => $this->_pushAuth,
      "deviceType"      => $this->_deviceType,
      "deviceName"      => $this->_deviceName,
      "deviceVersion"   => $this->_deviceVersion,
      "manufacturer"    => $this->_manufacturer,
      "os"              => $this->_os,
      "osVersion"       => $this->_osVersion,
      "screenWidth"     => $this->_screenWidth,
      "screenHeight"    => $this->_screenHeight,
      "app"             => $this->_app,
      "appVersion"      => $this->_appVersion,
      "customerFid"     => $this->_customerFid,
      "contactFid"      => $this->_contactFid,
      "subscriptionFid" => $this->_subscriptionFid,
      "pushStatus"      => $this->_pushStatus,
      "pushRate"        => $this->_pushRate,
      "hardwareId"      => $this->_hardwareId,
    ];
  }

  const PUSH_SOURCE_APPLE = 'apple';
  const PUSH_SOURCE_FIREBASE = 'firebase';

  /**
   * @param string $value apple, firebase
   *
   * @return $this
   */
  public function setPushSource(?string $value)
  {
    $this->_pushSource = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPushSource($default = null, $trim = true)
  {
    $value = $this->_pushSource ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPushAuth(?string $value)
  {
    $this->_pushAuth = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPushAuth($default = null, $trim = true)
  {
    $value = $this->_pushAuth ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setDeviceType(?string $value)
  {
    $this->_deviceType = $value;
    return $this;
  }

  /**
   * The type of device
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDeviceType($default = null, $trim = true)
  {
    $value = $this->_deviceType ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setDeviceName(?string $value)
  {
    $this->_deviceName = $value;
    return $this;
  }

  /**
   * The name of the device
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDeviceName($default = null, $trim = true)
  {
    $value = $this->_deviceName ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setDeviceVersion(?string $value)
  {
    $this->_deviceVersion = $value;
    return $this;
  }

  /**
   * The version of the device
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDeviceVersion($default = null, $trim = true)
  {
    $value = $this->_deviceVersion ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setManufacturer(?string $value)
  {
    $this->_manufacturer = $value;
    return $this;
  }

  /**
   * The manufacturer of the device
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getManufacturer($default = null, $trim = true)
  {
    $value = $this->_manufacturer ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setOs(?string $value)
  {
    $this->_os = $value;
    return $this;
  }

  /**
   * The operating system of the device
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getOs($default = null, $trim = true)
  {
    $value = $this->_os ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setOsVersion(?string $value)
  {
    $this->_osVersion = $value;
    return $this;
  }

  /**
   * The version of the operating system
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getOsVersion($default = null, $trim = true)
  {
    $value = $this->_osVersion ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setScreenWidth(?int $value)
  {
    $this->_screenWidth = $value;
    return $this;
  }

  /**
   * The width of the device screen
   *
   * @param mixed $default
   *
   * @return integer
   */
  public function getScreenWidth($default = null)
  {
    return $this->_screenWidth ?: $default;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setScreenHeight(?int $value)
  {
    $this->_screenHeight = $value;
    return $this;
  }

  /**
   * The height of the device screen
   *
   * @param mixed $default
   *
   * @return integer
   */
  public function getScreenHeight($default = null)
  {
    return $this->_screenHeight ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setApp(?string $value)
  {
    $this->_app = $value;
    return $this;
  }

  /**
   * The application running on the device (required)
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getApp($default = null, $trim = true)
  {
    $value = $this->_app ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setAppVersion(?string $value)
  {
    $this->_appVersion = $value;
    return $this;
  }

  /**
   * The version of the application
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAppVersion($default = null, $trim = true)
  {
    $value = $this->_appVersion ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCustomerFid(?string $value)
  {
    $this->_customerFid = $value;
    return $this;
  }

  /**
   * The customer FID (required one of customerFid or contactFid)
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCustomerFid($default = null, $trim = true)
  {
    $value = $this->_customerFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setContactFid(?string $value)
  {
    $this->_contactFid = $value;
    return $this;
  }

  /**
   * The contact FID (required one of customerFid or contactFid)
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getContactFid($default = null, $trim = true)
  {
    $value = $this->_contactFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSubscriptionFid(?string $value)
  {
    $this->_subscriptionFid = $value;
    return $this;
  }

  /**
   * The subscription FID
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSubscriptionFid($default = null, $trim = true)
  {
    $value = $this->_subscriptionFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPushStatus(?string $value)
  {
    $this->_pushStatus = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPushStatus($default = null, $trim = true)
  {
    $value = $this->_pushStatus ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPushRate(?string $value)
  {
    $this->_pushRate = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPushRate($default = null, $trim = true)
  {
    $value = $this->_pushRate ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setHardwareId(?string $value)
  {
    $this->_hardwareId = $value;
    return $this;
  }

  /**
   * The hardware id of the device (required)
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getHardwareId($default = null, $trim = true)
  {
    $value = $this->_hardwareId ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
