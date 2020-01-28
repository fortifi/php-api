<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class TicketPostRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "timestamp" => $this->getTimestamp(),
      "authorFid" => $this->getAuthorFid(),
      "senderFid" => $this->getSenderFid(),
      "textBody" => $this->getTextBody(),
      "language" => $this->getLanguage(),
      "hasAttachments" => $this->isHasAttachments(),
      "attachmentCount" => $this->getAttachmentCount(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getTimestamp($default = null)
  {
    return Objects::property($this->_getResultJson(), 'timestamp', $default);
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
  public function getSenderFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'senderFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTextBody($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'textBody', $default);
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
   * @param bool $default
   *
   * @return boolean
   */
  public function isHasAttachments($default = false)
  {
    return Objects::property($this->_getResultJson(), 'hasAttachments', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getAttachmentCount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'attachmentCount', $default);
  }
}
