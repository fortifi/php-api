<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\TicketRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidTicketsTicketFidEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/tickets/{ticketFid}';
  protected $_replacements = [];

  public function __construct($customerFid, $ticketFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
    $this->_replacements['{ticketFid}'] = $ticketFid;
  }

  /**
   * @return CustomersCustomerFidTicketsTicketFidPostsEndpoint
   */
  public function posts()
  {
    $endpoint = new CustomersCustomerFidTicketsTicketFidPostsEndpoint(
      $this->_replacements['{customerFid}'],
      $this->_replacements['{ticketFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Retrieve a single ticket for a customer
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
        'customers/{customerFid}/tickets/{ticketFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
