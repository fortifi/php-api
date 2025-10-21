<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ReviewRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "customerFid" => $this->getCustomerFid(),
      "language" => $this->getLanguage(),
      "app" => $this->getApp(),
      "appPlatform" => $this->getAppPlatform(),
      "appSource" => $this->getAppSource(),
      "displayName" => $this->getDisplayName(),
      "installSource" => $this->getInstallSource(),
      "provider" => $this->getProvider(),
      "rating" => $this->getRating(),
      "ratingMax" => $this->getRatingMax(),
      "providerId" => $this->getProviderId(),
      "providerRating" => $this->getProviderRating(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCustomerFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'customerFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getLanguage($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'language', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getApp($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'app', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAppPlatform($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'appPlatform', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAppSource($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'appSource', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDisplayName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'displayName', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getInstallSource($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'installSource', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getProvider($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'provider', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getRating($default = null)
  {
    return Objects::property($this->_getResultJson(), 'rating', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getRatingMax($default = null)
  {
    return Objects::property($this->_getResultJson(), 'ratingMax', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getProviderId($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'providerId', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getProviderRating($default = null)
  {
    return Objects::property($this->_getResultJson(), 'providerRating', $default);
  }
}
