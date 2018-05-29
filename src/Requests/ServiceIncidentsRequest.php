<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ServiceIncidentsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "serviceIncidents" => $this->getServiceIncidents(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return ServiceIncidentRequest[]
   */
  public function getServiceIncidents($default = [])
  {
    return Objects::property($this->_getResultJson(), 'serviceIncidents', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->serviceIncidents))
    {
      foreach($return->serviceIncidents as $itmKey => $itm)
      {
        $return->serviceIncidents[$itmKey] = (new ServiceIncidentRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
