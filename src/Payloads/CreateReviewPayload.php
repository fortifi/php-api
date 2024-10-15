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
   * Subject of the Review
   */
  protected $_subject;
  /**
   * The Customer Rating Submitted
   * @required
   */
  protected $_rating;
  /**
   * The max rating that can be offered (Defaults to 5)
   */
  protected $_ratingMax;
  /**
   * The Review Body
   */
  protected $_content;
  /**
   * The language code the Review was submitted in
   * @required
   */
  protected $_language;
  /**
   * The purchase FID the review is for
   */
  protected $_purchaseFid;
  /**
   * The app lookup reference
   */
  protected $_appLookupRef;
  /**
   * The app version
   */
  protected $_appVersion;
  /**
   * The review source inside the app
   */
  protected $_appSource;
  /**
   * IP Address of the visitor
   */
  protected $_ipAddress;
  /**
   * User Agent of the visitors browser 'HTTP_USER_AGENT'
   */
  protected $_userAgent;
  /**
   * The provider of the review
   * @required
   */
  protected $_provider;
  /**
   * The source of the install
   */
  protected $_installSource;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["customerFid"]))
    {
      $this->_customerFid = (string)$data["customerFid"];
    }
    if(isset($data["subject"]))
    {
      $this->_subject = (string)$data["subject"];
    }
    if(isset($data["rating"]))
    {
      $this->_rating = (int)$data["rating"];
    }
    if(isset($data["ratingMax"]))
    {
      $this->_ratingMax = (int)$data["ratingMax"];
    }
    if(isset($data["content"]))
    {
      $this->_content = (string)$data["content"];
    }
    if(isset($data["language"]))
    {
      $this->_language = (string)$data["language"];
    }
    if(isset($data["purchaseFid"]))
    {
      $this->_purchaseFid = (string)$data["purchaseFid"];
    }
    if(isset($data["appLookupRef"]))
    {
      $this->_appLookupRef = (string)$data["appLookupRef"];
    }
    if(isset($data["appVersion"]))
    {
      $this->_appVersion = (string)$data["appVersion"];
    }
    if(isset($data["appSource"]))
    {
      $this->_appSource = (string)$data["appSource"];
    }
    if(isset($data["ipAddress"]))
    {
      $this->_ipAddress = (string)$data["ipAddress"];
    }
    if(isset($data["userAgent"]))
    {
      $this->_userAgent = (string)$data["userAgent"];
    }
    if(isset($data["provider"]))
    {
      $this->_provider = (string)$data["provider"];
    }
    if(isset($data["installSource"]))
    {
      $this->_installSource = (string)$data["installSource"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "customerFid"   => $this->_customerFid,
      "subject"       => $this->_subject,
      "rating"        => $this->_rating,
      "ratingMax"     => $this->_ratingMax,
      "content"       => $this->_content,
      "language"      => $this->_language,
      "purchaseFid"   => $this->_purchaseFid,
      "appLookupRef"  => $this->_appLookupRef,
      "appVersion"    => $this->_appVersion,
      "appSource"     => $this->_appSource,
      "ipAddress"     => $this->_ipAddress,
      "userAgent"     => $this->_userAgent,
      "provider"      => $this->_provider,
      "installSource" => $this->_installSource,
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
  public function setSubject(?string $value)
  {
    $this->_subject = $value;
    return $this;
  }

  /**
   * Subject of the Review
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSubject($default = null, $trim = true)
  {
    $value = $this->_subject ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setRating(?int $value)
  {
    $this->_rating = $value;
    return $this;
  }

  /**
   * The Customer Rating Submitted
   *
   * @param mixed $default
   *
   * @return integer
   */
  public function getRating($default = null)
  {
    return $this->_rating ?: $default;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setRatingMax(?int $value)
  {
    $this->_ratingMax = $value;
    return $this;
  }

  /**
   * The max rating that can be offered (Defaults to 5)
   *
   * @param mixed $default
   *
   * @return integer
   */
  public function getRatingMax($default = null)
  {
    return $this->_ratingMax ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setContent(?string $value)
  {
    $this->_content = $value;
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
  public function getContent($default = null, $trim = true)
  {
    $value = $this->_content ?: $default;
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

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setAppLookupRef(?string $value)
  {
    $this->_appLookupRef = $value;
    return $this;
  }

  /**
   * The app lookup reference
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAppLookupRef($default = null, $trim = true)
  {
    $value = $this->_appLookupRef ?: $default;
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
   * The app version
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
  public function setAppSource(?string $value)
  {
    $this->_appSource = $value;
    return $this;
  }

  /**
   * The review source inside the app
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

  const PROVIDER_TRUSTPILOT = 'trustpilot';
  const PROVIDER_GOOGLE = 'google';
  const PROVIDER_FACEBOOK = 'facebook';
  const PROVIDER_YELP = 'yelp';
  const PROVIDER_TRIPADVISOR = 'tripadvisor';
  const PROVIDER_OTHER = 'other';

  /**
   * @param string $value trustpilot, google, facebook, yelp, tripadvisor, other
   *
   * @return $this
   */
  public function setProvider(?string $value)
  {
    $this->_provider = $value;
    return $this;
  }

  /**
   * The provider of the review
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getProvider($default = null, $trim = true)
  {
    $value = $this->_provider ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setInstallSource(?string $value)
  {
    $this->_installSource = $value;
    return $this;
  }

  /**
   * The source of the install
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getInstallSource($default = null, $trim = true)
  {
    $value = $this->_installSource ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
