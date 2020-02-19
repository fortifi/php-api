<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\PaymentMethodRequest;
use Fortifi\Api\V1\Payloads\PaymentMethodUpdatePayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidPaymentMethodsPaymentMethodFidEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/paymentMethods/{paymentMethodFid}';
  protected $_replacements = [];

  public function __construct($customerFid, $paymentMethodFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
    $this->_replacements['{paymentMethodFid}'] = $paymentMethodFid;
  }

  /**
   * @return PaymentMethodRequest
   */
  public function retrieve()
  {
    $request = new PaymentMethodRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/paymentMethods/{paymentMethodFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Update a card
   *
   * @param PaymentMethodUpdatePayload $payload
   *
   * @return ApiRequest
   */
  public function update(PaymentMethodUpdatePayload $payload)
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
        'customers/{customerFid}/paymentMethods/{paymentMethodFid}'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
