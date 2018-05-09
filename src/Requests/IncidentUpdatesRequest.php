<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class IncidentUpdatesRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "incidentUpdates" => $this->getIncidentUpdates(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return IncidentUpdateRequest[]
   */
  public function getIncidentUpdates($default = [])
  {
    return Objects::property($this->_getResultJson(), 'incidentUpdates', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->incidentUpdates))
    {
      $tmp = [];
      foreach($return->incidentUpdates as $itm)
      {
        $tmp[] = (new IncidentUpdateRequest())
          ->hydrate($itm);
      }
      $return->incidentUpdates = $tmp;
    }

    return $return;
  }
}
