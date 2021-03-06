<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\V1\Payloads\TicketStatusPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class TicketsTicketFidEndpoint extends ApiEndpoint
{
  protected $_path = 'tickets/{ticketFid}';
  protected $_replacements = [];

  public function __construct($ticketFid)
  {
    $this->_replacements['{ticketFid}'] = $ticketFid;
  }

  /**
   * @summary Set the status of a ticket
   *
   * @param TicketStatusPayload $payload
   *
   * @return BoolMessageRequest
   */
  public function setStatus(TicketStatusPayload $payload)
  {
    $request = new BoolMessageRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'tickets/{ticketFid}/status'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
