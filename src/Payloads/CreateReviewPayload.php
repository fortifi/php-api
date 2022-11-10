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
}
