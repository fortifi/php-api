<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class CreateInteractionInvitationPayload
  extends StartInteractionPayload
  implements \JsonSerializable
{
  protected $_topic;
  protected $_earliestStartTime;
  protected $_expiryTime;

  public function hydrate($data)
  {
    $data = (array)$data;
    parent::hydrate($data);
    if(isset($data["topic"]))
    {
      $this->_topic = (string)$data["topic"];
    }
    if(isset($data["earliestStartTime"]))
    {
      $this->_earliestStartTime = (string)$data["earliestStartTime"];
    }
    if(isset($data["expiryTime"]))
    {
      $this->_expiryTime = (string)$data["expiryTime"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "topic"             => $this->_topic,
        "earliestStartTime" => $this->_earliestStartTime,
        "expiryTime"        => $this->_expiryTime,
      ]
    );
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setTopic(?string $value)
  {
    $this->_topic = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTopic($default = null, $trim = true)
  {
    $value = $this->_topic ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setEarliestStartTime(?string $value)
  {
    $this->_earliestStartTime = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getEarliestStartTime($default = null, $trim = true)
  {
    $value = $this->_earliestStartTime ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setExpiryTime(?string $value)
  {
    $this->_expiryTime = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getExpiryTime($default = null, $trim = true)
  {
    $value = $this->_expiryTime ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
