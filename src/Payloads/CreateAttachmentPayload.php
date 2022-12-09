<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class CreateAttachmentPayload
  implements \JsonSerializable
{
  protected $_filename;
  protected $_mimeType;
  protected $_data;
  protected $_externalDataURL;
  protected $_externalDataUsername;
  protected $_externalDataPassword;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["filename"]))
    {
      $this->_filename = (string)$data["filename"];
    }
    if(isset($data["mimeType"]))
    {
      $this->_mimeType = (string)$data["mimeType"];
    }
    if(isset($data["data"]))
    {
      $this->_data = (string)$data["data"];
    }
    if(isset($data["externalDataURL"]))
    {
      $this->_externalDataURL = (string)$data["externalDataURL"];
    }
    if(isset($data["externalDataUsername"]))
    {
      $this->_externalDataUsername = (string)$data["externalDataUsername"];
    }
    if(isset($data["externalDataPassword"]))
    {
      $this->_externalDataPassword = (string)$data["externalDataPassword"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "filename"             => $this->_filename,
      "mimeType"             => $this->_mimeType,
      "data"                 => $this->_data,
      "externalDataURL"      => $this->_externalDataURL,
      "externalDataUsername" => $this->_externalDataUsername,
      "externalDataPassword" => $this->_externalDataPassword,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setFilename(?string $value)
  {
    $this->_filename = $value;
    return $this;
  }

  /**
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
  public function setMimeType(?string $value)
  {
    $this->_mimeType = $value;
    return $this;
  }

  /**
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

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setData(?string $value)
  {
    $this->_data = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getData($default = null, $trim = true)
  {
    $value = $this->_data ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setExternalDataURL(?string $value)
  {
    $this->_externalDataURL = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getExternalDataURL($default = null, $trim = true)
  {
    $value = $this->_externalDataURL ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setExternalDataUsername(?string $value)
  {
    $this->_externalDataUsername = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getExternalDataUsername($default = null, $trim = true)
  {
    $value = $this->_externalDataUsername ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setExternalDataPassword(?string $value)
  {
    $this->_externalDataPassword = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getExternalDataPassword($default = null, $trim = true)
  {
    $value = $this->_externalDataPassword ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
