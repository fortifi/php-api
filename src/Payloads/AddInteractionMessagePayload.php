<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class AddInteractionMessagePayload
  implements \JsonSerializable
{
  protected $_message;
  /**
   * IP of the message sender
   */
  protected $_source;
  protected $_actionType;
  protected $_language;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["message"]))
    {
      $this->_message = (string)$data["message"];
    }
    if(isset($data["source"]))
    {
      $this->_source = (string)$data["source"];
    }
    if(isset($data["actionType"]))
    {
      $this->_actionType = (string)$data["actionType"];
    }
    if(isset($data["language"]))
    {
      $this->_language = (string)$data["language"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "message"    => $this->_message,
      "source"     => $this->_source,
      "actionType" => $this->_actionType,
      "language"   => $this->_language,
    ];
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
  public function setSource(?string $value)
  {
    $this->_source = $value;
    return $this;
  }

  /**
   * IP of the message sender
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
   * @param string $value
   *
   * @return $this
   */
  public function setActionType(?string $value)
  {
    $this->_actionType = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getActionType($default = null, $trim = true)
  {
    $value = $this->_actionType ?: $default;
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
}
