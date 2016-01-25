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
   *
   * @return string
   */
  public function getUsername($default = null)
  {
    return Objects::property($this->_getResultJson(), 'username', $default);
  }

  /**
   * Language
   * 
   * @param mixed $default
   *
   * @return string
   */
  public function getLanguage($default = null)
  {
    return Objects::property($this->_getResultJson(), 'language', $default);
  }

  /**
   * Timezone for this user
   * 
   * @param mixed $default
   *
   * @return string
   */
  public function getTimezone($default = null)
  {
    return Objects::property($this->_getResultJson(), 'timezone', $default);
  }
}
