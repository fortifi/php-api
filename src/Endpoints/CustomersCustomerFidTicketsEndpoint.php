<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\TicketsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidTicketsEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/tickets';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @param $ticketFid
   *
   * @return CustomersCustomerFidTicketsTicketFidEndpoint
   */
  public function with($ticketFid)
  {
    $endpoint = new CustomersCustomerFidTicketsTicketFidEndpoint(
      $this->_replacements['{customerFid}'],
      $ticketFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Create a new support ticket
   *
   * @param $subject
   * @param $content
   * @param $recipient
   * @param $sender
   * @param $departmentFid
   *
   * @return ApiRequest
   */
  public function create($subject, $content, $recipient, $sender, $departmentFid = null)
  {
    $request = new ApiRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/tickets'
      )
    ));
    $detail->addPostField('subject', $subject);
    $detail->addPostField('content', $content);
    $detail->addPostField('recipient', $recipient);
    $detail->addPostField('sender', $sender);
    $detail->addPostField('departmentFid', $departmentFid);
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Get support tickets for customer
   *
   * @return TicketsRequest
   */
  public function all()
  {
    $request = new TicketsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/tickets'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
