<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\TicketPostsRequest;
use Fortifi\Api\V1\Requests\TicketPostRequest;
use Fortifi\Api\V1\Payloads\TicketReplyPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidTicketsTicketFidPostsEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/tickets/{ticketFid}/posts';
  protected $_replacements = [];

  public function __construct($customerFid, $ticketFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
    $this->_replacements['{ticketFid}'] = $ticketFid;
  }

  /**
   * @summary Retrieve ticket posts for a ticket
   *
   * @return TicketPostsRequest
   */
  public function all()
  {
    $request = new TicketPostsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/tickets/{ticketFid}/posts'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Post a reply to a ticket
   *
   * The attachments property is an array of unique filenames that have been
   * created using ```/upload/uploadUrl```
   *
   * @param TicketReplyPayload $payload
   *
   * @return TicketPostRequest
   */
  public function create(TicketReplyPayload $payload)
  {
    $request = new TicketPostRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/tickets/{ticketFid}/posts'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
