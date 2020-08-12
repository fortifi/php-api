<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class AttachmentRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "objectFid" => $this->getObjectFid(),
      "uniqueName" => $this->getUniqueName(),
      "fileName" => $this->getFileName(),
      "mimeType" => $this->getMimeType(),
      "size" => $this->getSize(),
      "md5sum" => $this->getMd5sum(),
      "virusFound" => $this->isVirusFound(),
      "virusName" => $this->getVirusName(),
      "downloadUrl" => $this->getDownloadUrl(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getObjectFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'objectFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getUniqueName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'uniqueName', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getFileName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'fileName', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getMimeType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'mimeType', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getSize($default = null)
  {
    return Objects::property($this->_getResultJson(), 'size', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getMd5sum($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'md5sum', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isVirusFound($default = false)
  {
    return Objects::property($this->_getResultJson(), 'virusFound', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getVirusName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'virusName', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDownloadUrl($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'downloadUrl', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
