<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ContactStatusesRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidContactStatusEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/contactStatus';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @summary List Contact Status for a given email address
   *
   * @param $emailAddress
   *
   * @return ContactStatusesRequest
   */
  public function all($emailAddress)
  {
    $request = new ContactStatusesRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/contactStatus'
      )
    ));
    $detail->addQueryField('emailAddress', $emailAddress);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
