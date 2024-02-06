<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class CreateReviewPayload
  implements \JsonSerializable
{
  /**
   * Customer who submitted the review
   */
  protected $_customerFid;
  /**
   * Title of the Review
   */
  protected $_displayName;
  /**
   * Source of the Review (e.g. Trustpilot, Google)
   */
  protected $_source;
  /**
   * The Customer Rating Submitted
   */
  protected $_starRating;
  /**
   * The max rating that can be offered (Defaults to 5)
   */
  protected $_starMax;
  /**
   * The Review Body
   */
  protected $_review;
  /**
   * The language code the Review was submitted in
   */
  protected $_language;
  /**
   * The review public url
   */
  protected $_publicUrl;
  /**
   * The reference ID for the review, (could be set via trustpilot)
   */
  protected $_referenceId;
  /**
   * The product FID the review is for
   */
  protected $_productFid;
  /**
   * User Agent of the visitors browser 'HTTP_USER_AGENT'
   */
  protected $_userAgent;
  /**
   * IP Address of the visitor
   */
  protected $_ipAddress;
  /**
   * The app the review was submitted from
   */
  protected $_app;
  /**
   * The source of the app
   */
  protected $_appSource;
  /**
   * The purchase FID the review is for
   */
  protected $_purchaseFid;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["customerFid"]))
    {
      $this->_customerFid = (string)$data["customerFid"];
    }
    if(isset($data["displayName"]))
    {
      $this->_displayName = (string)$data["displayName"];
    }
    if(isset($data["source"]))
    {
      $this->_source = (string)$data["source"];
    }
    if(isset($data["starRating"]))
    {
      $this->_starRating = (int)$data["starRating"];
    }
    if(isset($data["starMax"]))
    {
      $this->_starMax = (int)$data["starMax"];
    }
    if(isset($data["review"]))
    {
      $this->_review = (string)$data["review"];
    }
    if(isset($data["language"]))
    {
      $this->_language = (string)$data["language"];
    }
    if(isset($data["publicUrl"]))
    {
      $this->_publicUrl = (string)$data["publicUrl"];
    }
    if(isset($data["referenceId"]))
    {
      $this->_referenceId = (string)$data["referenceId"];
    }
    if(isset($data["productFid"]))
    {
      $this->_productFid = (string)$data["productFid"];
    }
    if(isset($data["userAgent"]))
    {
      $this->_userAgent = (string)$data["userAgent"];
    }
    if(isset($data["ipAddress"]))
    {
      $this->_ipAddress = (string)$data["ipAddress"];
    }
    if(isset($data["app"]))
    {
      $this->_app = (string)$data["app"];
    }
    if(isset($data["appSource"]))
    {
      $this->_appSource = (string)$data["appSource"];
    }
    if(isset($data["purchaseFid"]))
    {
      $this->_purchaseFid = (string)$data["purchaseFid"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "customerFid" => $this->_customerFid,
      "displayName" => $this->_displayName,
      "source"      => $this->_source,
      "starRating"  => $this->_starRating,
      "starMax"     => $this->_starMax,
      "review"      => $this->_review,
      "language"    => $this->_language,
      "publicUrl"   => $this->_publicUrl,
      "referenceId" => $this->_referenceId,
      "productFid"  => $this->_productFid,
      "userAgent"   => $this->_userAgent,
      "ipAddress"   => $this->_ipAddress,
      "app"         => $this->_app,
      "appSource"   => $this->_appSource,
      "purchaseFid" => $this->_purchaseFid,
    ];
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
   * Customer who submitted the review
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
  public function setDisplayName(?string $value)
  {
    $this->_displayName = $value;
    return $this;
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
    $value = $this->_displayName ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSource(?string $value)
  {
    $this->_source = $value;
    return $this;
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
    $value = $this->_source ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setStarRating(?int $value)
  {
    $this->_starRating = $value;
    return $this;
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
    return $this->_starRating ?: $default;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setStarMax(?int $value)
  {
    $this->_starMax = $value;
    return $this;
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
    return $this->_starMax ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setReview(?string $value)
  {
    $this->_review = $value;
    return $this;
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
    $value = $this->_review ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setLanguage(?string $value)
  {
    $this->_language = $value;
    return $this;
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
    $value = $this->_language ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPublicUrl(?string $value)
  {
    $this->_publicUrl = $value;
    return $this;
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
    $value = $this->_publicUrl ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setReferenceId(?string $value)
  {
    $this->_referenceId = $value;
    return $this;
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
    $value = $this->_referenceId ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setProductFid(?string $value)
  {
    $this->_productFid = $value;
    return $this;
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
    $value = $this->_productFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setUserAgent(?string $value)
  {
    $this->_userAgent = $value;
    return $this;
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
    $value = $this->_userAgent ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setIpAddress(?string $value)
  {
    $this->_ipAddress = $value;
    return $this;
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
    $value = $this->_ipAddress ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
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
   * The app the review was submitted from
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
  public function setAppSource(?string $value)
  {
    $this->_appSource = $value;
    return $this;
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
    $value = $this->_appSource ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPurchaseFid(?string $value)
  {
    $this->_purchaseFid = $value;
    return $this;
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
    $value = $this->_purchaseFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
