<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class TriggerActionPayload
  implements \JsonSerializable
{
  protected $_metaData;
  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   */
  protected $_time;
  /**
   * Your alias for the event to be triggered
   */
  protected $_alias;
  /**
   * If set to true, transactional messenger chains will be triggered
   */
  protected $_triggerMessenger;
  protected $_action;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["metaData"]))
    {
      $this->_metaData = [];
      foreach($data["metaData"] as $dItem)
      {
        $dObj = new KeyValuePayload();
        $dObj->hydrate($dItem);
        $this->_metaData[] = $dObj;
      }
    }
    if(isset($data["time"]))
    {
      $this->_time = (string)$data["time"];
    }
    if(isset($data["alias"]))
    {
      $this->_alias = (string)$data["alias"];
    }
    if(isset($data["triggerMessenger"]))
    {
      $this->_triggerMessenger = $data["triggerMessenger"];
    }
    if(isset($data["action"]))
    {
      $this->_action = new MessengerActionPayload();
      $this->_action->hydrate($data["action"]);
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "metaData"         => $this->_metaData,
      "time"             => $this->_time,
      "alias"            => $this->_alias,
      "triggerMessenger" => $this->_triggerMessenger,
      "action"           => $this->_action,
    ];
  }

  /**
   * @param KeyValuePayload[] $value
   *
   * @return $this
   */
  public function setMetaData(?array $value)
  {
    $this->_metaData = $value;
    return $this;
  }

  /**
   * @param KeyValuePayload $item
   *
   * @return $this
   */
  public function addMetaDatum(KeyValuePayload $item)
  {
    $this->_metaData[] = $item;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return KeyValuePayload[]
   */
  public function getMetaData($default = [])
  {
    return $this->_metaData ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setTime(?string $value)
  {
    $this->_time = $value;
    return $this;
  }

  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTime($default = null, $trim = true)
  {
    $value = $this->_time ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setAlias(?string $value)
  {
    $this->_alias = $value;
    return $this;
  }

  /**
   * Your alias for the event to be triggered
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAlias($default = null, $trim = true)
  {
    $value = $this->_alias ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param bool $value
   *
   * @return $this
   */
  public function setTriggerMessenger(?bool $value)
  {
    $this->_triggerMessenger = $value;
    return $this;
  }

  /**
   * If set to true, transactional messenger chains will be triggered
   *
   * @param bool $default
   *
   * @return boolean
   */
  public function isTriggerMessenger($default = false)
  {
    return (bool)$this->_triggerMessenger ?: $default;
  }

  /**
   * @param MessengerActionPayload $value
   *
   * @return $this
   */
  public function setAction(?MessengerActionPayload $value)
  {
    $this->_action = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return MessengerActionPayload
   */
  public function getAction($default = null)
  {
    return $this->_action ?: $default;
  }
}
