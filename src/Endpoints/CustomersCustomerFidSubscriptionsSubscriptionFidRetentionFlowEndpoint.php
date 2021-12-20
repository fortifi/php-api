<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\RetentionFlowStatesRequest;
use Fortifi\Api\V1\Requests\RetentionFlowStateRequest;
use Fortifi\Api\V1\Payloads\ActionRetentionFlowPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidSubscriptionsSubscriptionFidRetentionFlowEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/subscriptions/{subscriptionFid}/retentionFlow';
  protected $_replacements = [];

  public function __construct($customerFid, $subscriptionFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
    $this->_replacements['{subscriptionFid}'] = $subscriptionFid;
  }

  /**
   * @param $flowSearch
   *
   * @return CustomersCustomerFidSubscriptionsSubscriptionFidRetentionFlowFlowSearchEndpoint
   */
  public function with($flowSearch)
  {
    $endpoint = new CustomersCustomerFidSubscriptionsSubscriptionFidRetentionFlowFlowSearchEndpoint(
      $this->_replacements['{customerFid}'],
      $this->_replacements['{subscriptionFid}'],
      $flowSearch
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return CustomersCustomerFidSubscriptionsSubscriptionFidRetentionFlowReasonsEndpoint
   */
  public function reasons()
  {
    $endpoint = new CustomersCustomerFidSubscriptionsSubscriptionFidRetentionFlowReasonsEndpoint(
      $this->_replacements['{customerFid}'],
      $this->_replacements['{subscriptionFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return CustomersCustomerFidSubscriptionsSubscriptionFidRetentionFlowEmptyEndpoint
   */
  public function empty()
  {
    $endpoint = new CustomersCustomerFidSubscriptionsSubscriptionFidRetentionFlowEmptyEndpoint(
      $this->_replacements['{customerFid}'],
      $this->_replacements['{subscriptionFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Retreive a list of active retention flows
   *
   * @return RetentionFlowStatesRequest
   */
  public function all()
  {
    $request = new RetentionFlowStatesRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/subscriptions/{subscriptionFid}/retentionFlow'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Start a retention flow, and retrieve its state
   *
   * @param ActionRetentionFlowPayload $payload
   *
   * @return RetentionFlowStateRequest
   */
  public function create(ActionRetentionFlowPayload $payload)
  {
    $request = new RetentionFlowStateRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/subscriptions/{subscriptionFid}/retentionFlow'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
