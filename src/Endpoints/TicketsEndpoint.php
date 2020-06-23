<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\TicketRequest;
use Fortifi\Api\V1\Payloads\CreateTicketPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class TicketsEndpoint extends ApiEndpoint
{
  protected $_path = 'tickets';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $ticketFid
   *
   * @return TicketsTicketFidEndpoint
   */
  public function with($ticketFid)
  {
    $endpoint = new TicketsTicketFidEndpoint(
      $ticketFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Create a support ticket
   *
   * @param CreateTicketPayload $payload
   *
   * @return TicketRequest
   */
  public function create(CreateTicketPayload $payload)
  {
    $request = new TicketRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('tickets'));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
