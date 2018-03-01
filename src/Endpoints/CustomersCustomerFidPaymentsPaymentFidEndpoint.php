<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\FidRequest;
use Fortifi\Api\Core\ApiRequestDetail;
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
   * @summary Initiate a chargeback on a payment
   *
   * @param $dateSubmitted
   * @param $reasonCode
   * @param $caseNumber
   * @param $amount
   * @param $state
   * @param $source
   * @param $refunded
   * @param $description
   * @param $feeCurrency
   * @param $feeAmount
   *
   * @return FidRequest
   */
  public function createChargeback($dateSubmitted, $reasonCode, $caseNumber, $amount, $state, $source, $refunded, $description = null, $feeCurrency = null, $feeAmount = null)
  {
    $request = new FidRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/payments/{paymentFid}/chargeback'
      )
    ));
    $detail->addPostField('dateSubmitted', $dateSubmitted);
    $detail->addPostField('reasonCode', $reasonCode);
    $detail->addPostField('caseNumber', $caseNumber);
    $detail->addPostField('amount', $amount);
    $detail->addPostField('state', $state);
    $detail->addPostField('source', $source);
    $detail->addPostField('refunded', $refunded);
    $detail->addPostField('description', $description);
    $detail->addPostField('feeCurrency', $feeCurrency);
    $detail->addPostField('feeAmount', $feeAmount);
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
