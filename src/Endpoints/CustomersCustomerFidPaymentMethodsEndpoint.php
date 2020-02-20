<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\PaymentMethodsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidPaymentMethodsEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/paymentMethods';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @param $paymentMethodFid
   *
   * @return CustomersCustomerFidPaymentMethodsPaymentMethodFidEndpoint
   */
  public function with($paymentMethodFid)
  {
    $endpoint = new CustomersCustomerFidPaymentMethodsPaymentMethodFidEndpoint(
      $this->_replacements['{customerFid}'],
      $paymentMethodFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return CustomersCustomerFidPaymentMethodsPaypalEndpoint
   */
  public function paypal()
  {
    $endpoint = new CustomersCustomerFidPaymentMethodsPaypalEndpoint(
      $this->_replacements['{customerFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return CustomersCustomerFidPaymentMethodsCardsEndpoint
   */
  public function cards()
  {
    $endpoint = new CustomersCustomerFidPaymentMethodsCardsEndpoint(
      $this->_replacements['{customerFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary List customers payment methods
   *
   * @return PaymentMethodsRequest
   */
  public function all()
  {
    $request = new PaymentMethodsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/paymentMethods'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
