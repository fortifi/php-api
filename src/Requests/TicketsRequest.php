<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class TicketsRequest
  extends PaginationRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "tickets" => $this->getTickets(),
      ]
    );
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
      foreach($return->tickets as $itmKey => $itm)
      {
        $return->tickets[$itmKey] = (new TicketRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
