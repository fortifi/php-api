<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ReservationsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "reservations" => $this->getReservations(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return ReservationRequest[]
   */
  public function getReservations($default = [])
  {
    return Objects::property($this->_getResultJson(), 'reservations', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->reservations))
    {
      foreach($return->reservations as $itmKey => $itm)
      {
        $return->reservations[$itmKey] = (new ReservationRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
