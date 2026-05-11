<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class DevicesRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "devices" => $this->getDevices(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return DeviceRequest[]
   */
  public function getDevices($default = [])
  {
    return Objects::property($this->_getResultJson(), 'devices', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->devices))
    {
      foreach($return->devices as $itmKey => $itm)
      {
        $return->devices[$itmKey] = (new DeviceRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
