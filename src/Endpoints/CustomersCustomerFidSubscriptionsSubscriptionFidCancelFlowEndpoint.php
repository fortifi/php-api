<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\CancelFlowStatesRequest;
use Fortifi\Api\V1\Requests\CancelFlowStateRequest;
use Fortifi\Api\V1\Payloads\ActionCancelFlowPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidSubscriptionsSubscriptionFidCancelFlowEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/subscriptions/{subscriptionFid}/cancelFlow';
  protected $_replacements = [];

  public function __construct($customerFid, $subscriptionFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
    $this->_replacements['{subscriptionFid}'] = $subscriptionFid;
  }

  /**
   * @param $flowSearch
   *
   * @return CustomersCustomerFidSubscriptionsSubscriptionFidCancelFlowFlowSearchEndpoint
   */
  public function with($flowSearch)
  {
    $endpoint = new CustomersCustomerFidSubscriptionsSubscriptionFidCancelFlowFlowSearchEndpoint(
      $this->_replacements['{customerFid}'],
      $this->_replacements['{subscriptionFid}'],
      $flowSearch
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return CustomersCustomerFidSubscriptionsSubscriptionFidCancelFlowReasonsEndpoint
   */
  public function reasons()
  {
    $endpoint = new CustomersCustomerFidSubscriptionsSubscriptionFidCancelFlowReasonsEndpoint(
      $this->_replacements['{customerFid}'],
      $this->_replacements['{subscriptionFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return CustomersCustomerFidSubscriptionsSubscriptionFidCancelFlowEmptyEndpoint
   */
  public function empty()
  {
    $endpoint = new CustomersCustomerFidSubscriptionsSubscriptionFidCancelFlowEmptyEndpoint(
      $this->_replacements['{customerFid}'],
      $this->_replacements['{subscriptionFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Retreive a list of active cancel flows
   *
   * @return CancelFlowStatesRequest
   */
  public function all()
  {
    $request = new CancelFlowStatesRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/subscriptions/{subscriptionFid}/cancelFlow'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Start a cancel flow, and retrieve its state
   *
   * @param ActionCancelFlowPayload $payload
   *
   * @return CancelFlowStateRequest
   */
  public function create(ActionCancelFlowPayload $payload)
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
        'customers/{customerFid}/subscriptions/{subscriptionFid}/cancelFlow'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
