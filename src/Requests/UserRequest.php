<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;

class UserRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "fid" => $this->getFid(),
      "username" => $this->getUsername(),
      "language" => $this->getLanguage(),
      "timezone" => $this->getTimezone(),
    ];
  }

  /**
   * Campaign FID
   * 
   * @param mixed $default
   *
   * @return string
   */
  public function getFid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'fid', $default);
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
