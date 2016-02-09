<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;

class UserRequest
  extends FidRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "username" => $this->getUsername(),
        "language" => $this->getLanguage(),
        "timezone" => $this->getTimezone(),
      ]
    );
  }

  /**
   * Username
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getUsername($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'username', $default);
    return $trim ? trim($value) : $value;
  }

  /**
   * Language
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getLanguage($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'language', $default);
    return $trim ? trim($value) : $value;
  }

  /**
   * Timezone for this user
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTimezone($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'timezone', $default);
    return $trim ? trim($value) : $value;
  }
}
