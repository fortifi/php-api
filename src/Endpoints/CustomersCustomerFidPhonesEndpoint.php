<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidPhonesEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/phones';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @summary Add a phone number to a customer
   *
   * @param $phoneNumber
   * @param $displayName
   *
   * @return ApiRequest
   */
  public function create($phoneNumber, $displayName = null)
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
        'customers/{customerFid}/phones'
      )
    ));
    $detail->addPostField('phoneNumber', $phoneNumber);
    $detail->addPostField('displayName', $displayName);
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
