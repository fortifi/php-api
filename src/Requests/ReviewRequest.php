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
      "displayName" => $this->getDisplayName(),
      "source" => $this->getSource(),
      "starRating" => $this->getStarRating(),
      "starMax" => $this->getStarMax(),
      "review" => $this->getReview(),
      "language" => $this->getLanguage(),
      "publicUrl" => $this->getPublicUrl(),
      "referenceId" => $this->getReferenceId(),
      "productFid" => $this->getProductFid(),
      "userAgent" => $this->getUserAgent(),
      "ipAddress" => $this->getIpAddress(),
      "app" => $this->getApp(),
      "appSource" => $this->getAppSource(),
      "purchaseFid" => $this->getPurchaseFid(),
    ];
  }

  /**
   * Customer who submitted the review
   * 
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
   * Title of the Review
   * 
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
   * Source of the Review (e.g. Trustpilot, Google)
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSource($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'source', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * The Customer Rating Submitted
   * 
   * @param mixed $default
   *
   * @return integer
   */
  public function getStarRating($default = null)
  {
    return Objects::property($this->_getResultJson(), 'starRating', $default);
  }

  /**
   * The max rating that can be offered (Defaults to 5)
   * 
   * @param mixed $default
   *
   * @return integer
   */
  public function getStarMax($default = null)
  {
    return Objects::property($this->_getResultJson(), 'starMax', $default);
  }

  /**
   * The Review Body
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getReview($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'review', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * The language code the Review was submitted in
   * 
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
   * The review public url
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPublicUrl($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'publicUrl', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * The reference ID for the review, (could be set via trustpilot)
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getReferenceId($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'referenceId', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * The product FID the review is for
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getProductFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'productFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * User Agent of the visitors browser 'HTTP_USER_AGENT'
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getUserAgent($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'userAgent', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * IP Address of the visitor
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getIpAddress($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'ipAddress', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * The app the review was submitted from
   * 
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
   * The source of the app
   * 
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
   * The purchase FID the review is for
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPurchaseFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'purchaseFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
