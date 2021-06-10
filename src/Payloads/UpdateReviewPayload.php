<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class UpdateReviewPayload
  implements \JsonSerializable
{
  /**
   * The Fid of the Review to update
   */
  protected $_reviewFid;
  /**
   * Title of the Review
   */
  protected $_displayName;
  /**
   * The Review Body
   */
  protected $_review;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["reviewFid"]))
    {
      $this->_reviewFid = (string)$data["reviewFid"];
    }
    if(isset($data["displayName"]))
    {
      $this->_displayName = (string)$data["displayName"];
    }
    if(isset($data["review"]))
    {
      $this->_review = (string)$data["review"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "reviewFid"   => $this->_reviewFid,
      "displayName" => $this->_displayName,
      "review"      => $this->_review,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setReviewFid(?string $value)
  {
    $this->_reviewFid = $value;
    return $this;
  }

  /**
   * The Fid of the Review to update
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getReviewFid($default = null, $trim = true)
  {
    $value = $this->_reviewFid ?: $default;
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
}
