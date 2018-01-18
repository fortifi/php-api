<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\PaypalInitRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidPaymentMethodsPaypalEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/paymentMethods/paypal';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @summary Initialise a new paypal agreement for existing subscriptions
   *
   * @param $paymentServiceFid
   * @param $subscriptionFids
   * @param $successUrl
   * @param $cancelUrl
   * @param $failUrl
   *
   * @return PaypalInitRequest
   */
  public function createInitialise($paymentServiceFid, $subscriptionFids, $successUrl, $cancelUrl, $failUrl)
  {
    $request = new PaypalInitRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/paymentMethods/paypal/initialise'
      )
    ));
    $detail->addPostField('paymentServiceFid', $paymentServiceFid);
    $detail->addPostField('subscriptionFids', $subscriptionFids);
    $detail->addPostField('successUrl', $successUrl);
    $detail->addPostField('cancelUrl', $cancelUrl);
    $detail->addPostField('failUrl', $failUrl);
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Complete a paypal agreement created with initialise
   *
   * @param $paymentServiceFid
   * @param $subscriptionFids
   * @param $token
   *
   * @return ApiRequest
   */
  public function createComplete($paymentServiceFid, $subscriptionFids, $token)
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
        'customers/{customerFid}/paymentMethods/paypal/complete'
      )
    ));
    $detail->addPostField('paymentServiceFid', $paymentServiceFid);
    $detail->addPostField('subscriptionFids', $subscriptionFids);
    $detail->addPostField('token', $token);
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
