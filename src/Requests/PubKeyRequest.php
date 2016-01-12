<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;

class PubKeyRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "key" => $this->getKey(),
    ];
  }

  /**
   * RSA Public Key
   * 
   * @param mixed $default
   *
   * @return string
   */
  public function getKey($default = null)
  {
    return Objects::property($this->_getResultJson(), 'key', $default);
  }
}
