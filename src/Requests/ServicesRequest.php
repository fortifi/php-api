<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ServicesRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "services" => $this->getServices(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return ServiceRequest[]
   */
  public function getServices($default = [])
  {
    return Objects::property($this->_getResultJson(), 'services', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->services))
    {
      foreach($return->services as $itmKey => $itm)
      {
        $return->services[$itmKey] = (new ServiceRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
