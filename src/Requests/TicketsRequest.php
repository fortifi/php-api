<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class TicketsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "tickets" => $this->getTickets(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return TicketRequest[]
   */
  public function getTickets($default = [])
  {
    return Objects::property($this->_getResultJson(), 'tickets', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->tickets))
    {
      $tmp = [];
      foreach($return->tickets as $itm)
      {
        $tmp[] = (new TicketRequest())
          ->hydrate($itm);
      }
      $return->tickets = $tmp;
    }

    return $return;
  }
}