<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class CreateCancelRequestPayload
  implements \JsonSerializable
{
  protected $_userIp;
  protected $_userAgent;
  protected $_cancelType;
  protected $_reason;
  protected $_isAuthed;
  protected $_authenticatedBy;
  protected $_note;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["userIp"]))
    {
      $this->_userIp = (string)$data["userIp"];
    }
    if(isset($data["userAgent"]))
    {
      $this->_userAgent = (string)$data["userAgent"];
    }
    if(isset($data["cancelType"]))
    {
      $this->_cancelType = (string)$data["cancelType"];
    }
    if(isset($data["reason"]))
    {
      $this->_reason = (string)$data["reason"];
    }
    if(isset($data["isAuthed"]))
    {
      $this->_isAuthed = $data["isAuthed"];
    }
    if(isset($data["authenticatedBy"]))
    {
      $this->_authenticatedBy = (string)$data["authenticatedBy"];
    }
    if(isset($data["note"]))
    {
      $this->_note = (string)$data["note"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "userIp"          => $this->_userIp,
      "userAgent"       => $this->_userAgent,
      "cancelType"      => $this->_cancelType,
      "reason"          => $this->_reason,
      "isAuthed"        => $this->_isAuthed,
      "authenticatedBy" => $this->_authenticatedBy,
      "note"            => $this->_note,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setUserIp(?string $value)
  {
    $this->_userIp = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getUserIp($default = null, $trim = true)
  {
    $value = $this->_userIp ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setUserAgent(?string $value)
  {
    $this->_userAgent = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getUserAgent($default = null, $trim = true)
  {
    $value = $this->_userAgent ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  const CANCEL_TYPE_DISABLE_AUTO_RENEW = 'disable_auto_renew';
  const CANCEL_TYPE_TURN_OFF_AUTO_CHARGE = 'turn_off_auto_charge';
  const CANCEL_TYPE_TERMINATE = 'terminate';

  /**
   * @param string $value disable_auto_renew, turn_off_auto_charge, terminate
   *
   * @return $this
   */
  public function setCancelType(?string $value)
  {
    $this->_cancelType = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCancelType($default = null, $trim = true)
  {
    $value = $this->_cancelType ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setReason(?string $value)
  {
    $this->_reason = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getReason($default = null, $trim = true)
  {
    $value = $this->_reason ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param bool $value
   *
   * @return $this
   */
  public function setIsAuthed(?bool $value)
  {
    $this->_isAuthed = $value;
    return $this;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isAuthed($default = false)
  {
    return (bool)$this->_isAuthed ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setAuthenticatedBy(?string $value)
  {
    $this->_authenticatedBy = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAuthenticatedBy($default = null, $trim = true)
  {
    $value = $this->_authenticatedBy ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setNote(?string $value)
  {
    $this->_note = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getNote($default = null, $trim = true)
  {
    $value = $this->_note ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
