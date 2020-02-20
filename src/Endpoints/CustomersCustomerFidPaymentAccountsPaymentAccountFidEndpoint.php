<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\PaymentAccountRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidPaymentAccountsPaymentAccountFidEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/paymentAccounts/{paymentAccountFid}';
  protected $_replacements = [];

  public function __construct($customerFid, $paymentAccountFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
    $this->_replacements['{paymentAccountFid}'] = $paymentAccountFid;
  }

  /**
   * @return PaymentAccountRequest
   */
  public function retrieve()
  {
    $request = new PaymentAccountRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/paymentAccounts/{paymentAccountFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
