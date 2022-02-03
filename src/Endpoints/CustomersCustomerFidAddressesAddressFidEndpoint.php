<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidAddressesAddressFidEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/addresses/{addressFid}';
  protected $_replacements = [];

  public function __construct($customerFid, $addressFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
    $this->_replacements['{addressFid}'] = $addressFid;
  }

  /**
   * @summary Remove an address
   *
   * @return ApiRequest
   */
  public function delete()
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
        'customers/{customerFid}/addresses/{addressFid}'
      )
    ));
    $detail->setMethod('DELETE');
    $request->setRequestDetail($detail);
    return $request;
  }
}
