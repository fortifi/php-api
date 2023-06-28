<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\SentEmailsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidSentEmailsEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/sentEmails';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @summary List Emails sent to a Customer
   *
   * @return SentEmailsRequest
   */
  public function all()
  {
    $request = new SentEmailsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/sentEmails'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
