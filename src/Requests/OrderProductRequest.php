<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;

class OrderProductRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "fid" => $this->getFid(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getFid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'fid', $default);
  }
}
      
