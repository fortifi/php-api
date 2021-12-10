<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\CancelFlowOptionsRequest;
use Fortifi\Api\V1\Payloads\CancelFlowOptionsPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidSubscriptionsSubscriptionFidCancelFlowFlowSearchOptionsEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/subscriptions/{subscriptionFid}/cancelFlow/{flowSearch}/options';
  protected $_replacements = [];

  public function __construct($customerFid, $subscriptionFid, $flowSearch)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
    $this->_replacements['{subscriptionFid}'] = $subscriptionFid;
    $this->_replacements['{flowSearch}'] = $flowSearch;
  }

  /**
   * @summary Retrieve cancel flow options
   *
   * @return CancelFlowOptionsRequest
   */
  public function all()
  {
    $request = new CancelFlowOptionsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/subscriptions/{subscriptionFid}/cancelFlow/{flowSearch}/options'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Set cancel flow options
   *
   * @param CancelFlowOptionsPayload $payload
   *
   * @return CancelFlowOptionsRequest
   */
  public function create(CancelFlowOptionsPayload $payload)
  {
    $request = new CancelFlowOptionsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/subscriptions/{subscriptionFid}/cancelFlow/{flowSearch}/options'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
