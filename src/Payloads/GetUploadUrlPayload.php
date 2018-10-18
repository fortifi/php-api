<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class GetUploadUrlPayload
  implements \JsonSerializable
{
  /**
   * Attachment file name
   */
  protected $_filename;
  /**
   * Attachment file size
   */
  protected $_filesize;
  /**
   * Attachment checksum md5
   */
  protected $_md5checksum;
  /**
   * Attachment mime type
   */
  protected $_mimeType;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["filename"]))
    {
      $this->_filename = (string)$data["filename"];
    }
    if(isset($data["filesize"]))
    {
      $this->_filesize = (string)$data["filesize"];
    }
    if(isset($data["md5checksum"]))
    {
      $this->_md5checksum = (string)$data["md5checksum"];
    }
    if(isset($data["mimeType"]))
    {
      $this->_mimeType = (string)$data["mimeType"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "filename"    => $this->_filename,
      "filesize"    => $this->_filesize,
      "md5checksum" => $this->_md5checksum,
      "mimeType"    => $this->_mimeType,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setFilename($value)
  {
    $this->_filename = $value;
    return $this;
  }

  /**
   * Attachment file name
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getFilename($default = null, $trim = true)
  {
    $value = $this->_filename ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setFilesize($value)
  {
    $this->_filesize = $value;
    return $this;
  }

  /**
   * Attachment file size
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getFilesize($default = null, $trim = true)
  {
    $value = $this->_filesize ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setMd5checksum($value)
  {
    $this->_md5checksum = $value;
    return $this;
  }

  /**
   * Attachment checksum md5
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getMd5checksum($default = null, $trim = true)
  {
    $value = $this->_md5checksum ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setMimeType($value)
  {
    $this->_mimeType = $value;
    return $this;
  }

  /**
   * Attachment mime type
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getMimeType($default = null, $trim = true)
  {
    $value = $this->_mimeType ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
