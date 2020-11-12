<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\EnvelopeRequest;
use Fortifi\Api\V1\Payloads\CreatePendingPaymentMethodPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidPaymentMethodsCreatePendingEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/paymentMethods/createPending';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @summary Create a new pending payment method
   *
   * @param CreatePendingPaymentMethodPayload $payload
   *
   * @return EnvelopeRequest
   */
  public function create(CreatePendingPaymentMethodPayload $payload)
  {
    $request = new EnvelopeRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/paymentMethods/createPending'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
