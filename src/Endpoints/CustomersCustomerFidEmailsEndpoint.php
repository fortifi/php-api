<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidEmailsEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/emails';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @summary Add an email address to a customer
   *
   * @param $emailAddress
   *
   * @return ApiRequest
   */
  public function create($emailAddress)
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
        'customers/{customerFid}/emails'
      )
    ));
    $detail->addPostField('emailAddress', $emailAddress);
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
