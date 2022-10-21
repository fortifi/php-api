<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class CommentRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "dataNodeFid" => $this->getDataNodeFid(),
      "microtime" => $this->getMicrotime(),
      "colour" => $this->getColour(),
      "authorFid" => $this->getAuthorFid(),
      "message" => $this->getMessage(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDataNodeFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'dataNodeFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getMicrotime($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'microtime', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getColour($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'colour', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAuthorFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'authorFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getMessage($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'message', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
