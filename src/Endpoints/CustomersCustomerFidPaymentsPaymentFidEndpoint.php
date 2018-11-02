<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\PaymentRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidPaymentsPaymentFidEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/payments/{paymentFid}';
  protected $_replacements = [];

  public function __construct($customerFid, $paymentFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
    $this->_replacements['{paymentFid}'] = $paymentFid;
  }

  /**
   * @return CustomersCustomerFidPaymentsPaymentFidChargebackEndpoint
   */
  public function chargeback()
  {
    $endpoint = new CustomersCustomerFidPaymentsPaymentFidChargebackEndpoint(
      $this->_replacements['{customerFid}'],
      $this->_replacements['{paymentFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Retrieve a payment
   *
   * @return PaymentRequest
   */
  public function retrieve()
  {
    $request = new PaymentRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/payments/{paymentFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Refund a payment
   *
   * @param $totalRefund
   * @param $reasonFid
   * @param $refundType
   * @param $addCreditToInvoice
   *
   * @return ApiRequest
   */
  public function setRefund($totalRefund, $reasonFid, $refundType, $addCreditToInvoice)
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
        'customers/{customerFid}/payments/{paymentFid}/refund'
      )
    ));
    $detail->addPostField('totalRefund', $totalRefund);
    $detail->addPostField('reasonFid', $reasonFid);
    $detail->addPostField('refundType', $refundType);
    $detail->addPostField('addCreditToInvoice', $addCreditToInvoice);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
