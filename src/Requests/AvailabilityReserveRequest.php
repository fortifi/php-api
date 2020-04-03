<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class AvailabilityReserveRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "reserved" => $this->isReserved(),
    ];
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isReserved($default = false)
  {
    return Objects::property($this->_getResultJson(), 'reserved', $default);
  }
}
