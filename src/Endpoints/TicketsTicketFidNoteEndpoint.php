<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\V1\Payloads\AddTicketNotePayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class TicketsTicketFidNoteEndpoint extends ApiEndpoint
{
  protected $_path = 'tickets/{ticketFid}/note';
  protected $_replacements = [];

  public function __construct($ticketFid)
  {
    $this->_replacements['{ticketFid}'] = $ticketFid;
  }

  /**
   * @summary Create a note against the ticket
   *
   * @param AddTicketNotePayload $payload
   *
   * @return BoolMessageRequest
   */
  public function create(AddTicketNotePayload $payload)
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
        'tickets/{ticketFid}/note'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
