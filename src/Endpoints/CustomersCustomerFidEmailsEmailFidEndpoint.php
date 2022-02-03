<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidEmailsEmailFidEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/emails/{emailFid}';
  protected $_replacements = [];

  public function __construct($customerFid, $emailFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
    $this->_replacements['{emailFid}'] = $emailFid;
  }

  /**
   * @summary Remove an email
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
        'customers/{customerFid}/emails/{emailFid}'
      )
    ));
    $detail->setMethod('DELETE');
    $request->setRequestDetail($detail);
    return $request;
  }
}
