<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\TicketRequest;
use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\V1\Payloads\updateCcBccPayload;
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
   * @return TicketsTicketFidPostsEndpoint
   */
  public function posts()
  {
    $endpoint = new TicketsTicketFidPostsEndpoint(
      $this->_replacements['{ticketFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return TicketsTicketFidNoteEndpoint
   */
  public function note()
  {
    $endpoint = new TicketsTicketFidNoteEndpoint(
      $this->_replacements['{ticketFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Get a ticket
   *
   * @return TicketRequest
   */
  public function retrieve()
  {
    $request = new TicketRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'tickets/{ticketFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
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

  /**
   * @summary Update Cc and Bcc fields for ticket
   *
   * If ```clearExistingCcBcc``` field is true, the ```add``` fields can be used
   * to re-populate the lists in the same call
   *
   * @param updateCcBccPayload $payload
   *
   * @return BoolMessageRequest
   */
  public function setUpdateCcBcc(updateCcBccPayload $payload)
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
        'tickets/{ticketFid}/updateCcBcc'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
