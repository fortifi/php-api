<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;

class OrderVerificationRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "requireRedirect" => $this->isRequireRedirect(),
      "redirectUrl" => $this->getRedirectUrl(),
    ];
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isRequireRedirect($default = false)
  {
    return Objects::property($this->_getResultJson(), 'requireRedirect', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getRedirectUrl($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'redirectUrl', $default);
    return $trim ? trim($value) : $value;
  }
}
