<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class EnvelopeMetaRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "requestId" => $this->getRequestId(),
      "code" => $this->getCode(),
      "message" => $this->getMessage(),
    ];
  }

  /**
   * Request ID
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getRequestId($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'requestId', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * Status code
   * 
   * @param mixed $default
   *
   * @return integer
   */
  public function getCode($default = null)
  {
    return Objects::property($this->_getResultJson(), 'code', $default);
  }

  /**
   * Status message
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getMessage($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'message', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
