<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\PaymentsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class FinancePaymentsEndpoint extends ApiEndpoint
{
  protected $_path = 'finance/payments';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @summary Perform a payment search
   *
   * @param $transactionId
   * @param $currency
   * @param $transactionDate
   * @param $dateTolerance
   * @param $first6last4
   * @param $arn
   * @param $authCode
   * @param $amount
   *
   * @return PaymentsRequest
   */
  public function all($transactionId = null, $currency = null, $transactionDate = null, $dateTolerance = null, $first6last4 = null, $arn = null, $authCode = null, $amount = null)
  {
    $request = new PaymentsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('finance/payments'));
    $detail->addQueryField('transactionId', $transactionId);
    $detail->addQueryField('currency', $currency);
    $detail->addQueryField('transactionDate', $transactionDate);
    $detail->addQueryField('dateTolerance', $dateTolerance);
    $detail->addQueryField('first6last4', $first6last4);
    $detail->addQueryField('arn', $arn);
    $detail->addQueryField('authCode', $authCode);
    $detail->addQueryField('amount', $amount);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
