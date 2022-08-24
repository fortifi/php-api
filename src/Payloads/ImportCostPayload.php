<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class ImportCostPayload
  implements \JsonSerializable
{
  protected $_filename;
  protected $_mimeType;
  protected $_data;

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
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "filename" => $this->_filename,
      "mimeType" => $this->_mimeType,
      "data"     => $this->_data,
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
}
