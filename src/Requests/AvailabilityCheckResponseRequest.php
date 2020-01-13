<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class AvailabilityCheckResponseRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "isAvailable" => $this->isAvailable(),
      "availableSkus" => $this->getAvailableSkus(),
    ];
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isAvailable($default = false)
  {
    return Objects::property($this->_getResultJson(), 'isAvailable', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string[]
   */
  public function getAvailableSkus($default = [])
  {
    return Objects::property($this->_getResultJson(), 'availableSkus', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);


    return $return;
  }
}
