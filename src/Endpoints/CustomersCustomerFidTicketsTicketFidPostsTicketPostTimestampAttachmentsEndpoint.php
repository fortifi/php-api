<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\AttachmentsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidTicketsTicketFidPostsTicketPostTimestampAttachmentsEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/tickets/{ticketFid}/posts/{ticketPostTimestamp}/attachments';
  protected $_replacements = [];

  public function __construct($customerFid, $ticketFid, $ticketPostTimestamp)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
    $this->_replacements['{ticketFid}'] = $ticketFid;
    $this->_replacements['{ticketPostTimestamp}'] = $ticketPostTimestamp;
  }

  /**
   * @summary Get attachments for a ticket post
   *
   * @return AttachmentsRequest
   */
  public function all()
  {
    $request = new AttachmentsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/tickets/{ticketFid}/posts/{ticketPostTimestamp}/attachments'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
