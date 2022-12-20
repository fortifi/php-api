<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class InteractionMessageRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "timestamp" => $this->getTimestamp(),
      "randomCode" => $this->getRandomCode(),
      "authorName" => $this->getAuthorName(),
      "userFid" => $this->getUserFid(),
      "customerInitiated" => $this->isCustomerInitiated(),
      "method" => $this->getMethod(),
      "source" => $this->getSource(),
      "content" => $this->getContent(),
      "actionType" => $this->getActionType(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTimestamp($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'timestamp', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getRandomCode($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'randomCode', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAuthorName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'authorName', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getUserFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'userFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isCustomerInitiated($default = false)
  {
    return Objects::property($this->_getResultJson(), 'customerInitiated', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getMethod($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'method', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
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
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getContent($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'content', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getActionType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'actionType', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
