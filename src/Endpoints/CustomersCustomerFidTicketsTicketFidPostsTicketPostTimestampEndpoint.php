<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidTicketsTicketFidPostsTicketPostTimestampEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/tickets/{ticketFid}/posts/{ticketPostTimestamp}';
  protected $_replacements = [];

  public function __construct($customerFid, $ticketFid, $ticketPostTimestamp)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
    $this->_replacements['{ticketFid}'] = $ticketFid;
    $this->_replacements['{ticketPostTimestamp}'] = $ticketPostTimestamp;
  }

  /**
   * @return CustomersCustomerFidTicketsTicketFidPostsTicketPostTimestampAttachmentsEndpoint
   */
  public function attachments()
  {
    $endpoint = new CustomersCustomerFidTicketsTicketFidPostsTicketPostTimestampAttachmentsEndpoint(
      $this->_replacements['{customerFid}'],
      $this->_replacements['{ticketFid}'],
      $this->_replacements['{ticketPostTimestamp}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
