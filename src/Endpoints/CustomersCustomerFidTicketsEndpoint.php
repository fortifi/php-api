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
   * The attachments property is an array of unique filenames that have been
   * created using ```/upload/uploadUrl```
   *
   * @param $subject
   * @param $content
   * @param $recipient
   * @param $sender
   * @param $departmentFid
   * @param $attachments
   *
   * @return ApiRequest
   */
  public function create($subject, $content, $recipient, $sender, $departmentFid = null, $attachments = null)
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
    $detail->addPostField('attachments', $attachments);
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Get support tickets for customer
   *
   * @param $limit
   * @param $page
   *
   * @return TicketsRequest
   */
  public function all($limit = null, $page = null)
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
    $detail->addQueryField('limit', $limit);
    $detail->addQueryField('page', $page);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
