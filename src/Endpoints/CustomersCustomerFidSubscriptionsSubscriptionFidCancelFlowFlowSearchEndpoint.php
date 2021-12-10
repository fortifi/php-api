<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\CancelFlowStateRequest;
use Fortifi\Api\V1\Payloads\ActionCancelFlowPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidSubscriptionsSubscriptionFidCancelFlowFlowSearchEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/subscriptions/{subscriptionFid}/cancelFlow/{flowSearch}';
  protected $_replacements = [];

  public function __construct($customerFid, $subscriptionFid, $flowSearch)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
    $this->_replacements['{subscriptionFid}'] = $subscriptionFid;
    $this->_replacements['{flowSearch}'] = $flowSearch;
  }

  /**
   * @return CustomersCustomerFidSubscriptionsSubscriptionFidCancelFlowFlowSearchOptionsEndpoint
   */
  public function options()
  {
    $endpoint = new CustomersCustomerFidSubscriptionsSubscriptionFidCancelFlowFlowSearchOptionsEndpoint(
      $this->_replacements['{customerFid}'],
      $this->_replacements['{subscriptionFid}'],
      $this->_replacements['{flowSearch}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Retreive the state of a cancel flow
   *
   * @return CancelFlowStateRequest
   */
  public function retrieve()
  {
    $request = new CancelFlowStateRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/subscriptions/{subscriptionFid}/cancelFlow/{flowSearch}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Post an action for a cancel flow, and retrieve its latest state
   *
   * @param ActionCancelFlowPayload $payload
   *
   * @return CancelFlowStateRequest
   */
  public function update(ActionCancelFlowPayload $payload)
  {
    $request = new CancelFlowStateRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/subscriptions/{subscriptionFid}/cancelFlow/{flowSearch}'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
