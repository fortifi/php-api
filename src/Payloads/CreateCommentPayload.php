<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class CreateCommentPayload
  implements \JsonSerializable
{
  protected $_dataNodeFid;
  protected $_colour;
  protected $_authorFid;
  protected $_message;
  protected $_microtime;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["dataNodeFid"]))
    {
      $this->_dataNodeFid = (string)$data["dataNodeFid"];
    }
    if(isset($data["colour"]))
    {
      $this->_colour = (string)$data["colour"];
    }
    if(isset($data["authorFid"]))
    {
      $this->_authorFid = (string)$data["authorFid"];
    }
    if(isset($data["message"]))
    {
      $this->_message = (string)$data["message"];
    }
    if(isset($data["microtime"]))
    {
      $this->_microtime = (string)$data["microtime"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "dataNodeFid" => $this->_dataNodeFid,
      "colour"      => $this->_colour,
      "authorFid"   => $this->_authorFid,
      "message"     => $this->_message,
      "microtime"   => $this->_microtime,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setDataNodeFid(?string $value)
  {
    $this->_dataNodeFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDataNodeFid($default = null, $trim = true)
  {
    $value = $this->_dataNodeFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setColour(?string $value)
  {
    $this->_colour = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getColour($default = null, $trim = true)
  {
    $value = $this->_colour ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setAuthorFid(?string $value)
  {
    $this->_authorFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAuthorFid($default = null, $trim = true)
  {
    $value = $this->_authorFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setMessage(?string $value)
  {
    $this->_message = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getMessage($default = null, $trim = true)
  {
    $value = $this->_message ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setMicrotime(?string $value)
  {
    $this->_microtime = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getMicrotime($default = null, $trim = true)
  {
    $value = $this->_microtime ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
