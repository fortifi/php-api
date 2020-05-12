<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidSubscriptionsSubscriptionFidPeriodsPeriodFidEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/subscriptions/{subscriptionFid}/periods/{periodFid}';
  protected $_replacements = [];

  public function __construct($customerFid, $subscriptionFid, $periodFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
    $this->_replacements['{subscriptionFid}'] = $subscriptionFid;
    $this->_replacements['{periodFid}'] = $periodFid;
  }

  /**
   * @summary Refund a subscription period
   *
   * @param $refundAmount
   * @param $reason
   * @param $addCreditToInvoice
   *
   * @return ApiRequest
   */
  public function setRefund($refundAmount = null, $reason = null, $addCreditToInvoice = null)
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
        'customers/{customerFid}/subscriptions/{subscriptionFid}/periods/{periodFid}/refund'
      )
    ));
    $detail->addPostField('refundAmount', $refundAmount);
    $detail->addPostField('reason', $reason);
    $detail->addPostField('addCreditToInvoice', $addCreditToInvoice);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
