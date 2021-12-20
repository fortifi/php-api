<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\RetentionFlowStateRequest;
use Fortifi\Api\V1\Payloads\ActionRetentionFlowPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidSubscriptionsSubscriptionFidRetentionFlowFlowSearchEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/subscriptions/{subscriptionFid}/retentionFlow/{flowSearch}';
  protected $_replacements = [];

  public function __construct($customerFid, $subscriptionFid, $flowSearch)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
    $this->_replacements['{subscriptionFid}'] = $subscriptionFid;
    $this->_replacements['{flowSearch}'] = $flowSearch;
  }

  /**
   * @return CustomersCustomerFidSubscriptionsSubscriptionFidRetentionFlowFlowSearchOptionsEndpoint
   */
  public function options()
  {
    $endpoint = new CustomersCustomerFidSubscriptionsSubscriptionFidRetentionFlowFlowSearchOptionsEndpoint(
      $this->_replacements['{customerFid}'],
      $this->_replacements['{subscriptionFid}'],
      $this->_replacements['{flowSearch}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Retreive the state of a retention flow
   *
   * @return RetentionFlowStateRequest
   */
  public function retrieve()
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
        'customers/{customerFid}/subscriptions/{subscriptionFid}/retentionFlow/{flowSearch}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Post an action for a cancel flow, and retrieve its latest state
   *
   * @param ActionRetentionFlowPayload $payload
   *
   * @return RetentionFlowStateRequest
   */
  public function update(ActionRetentionFlowPayload $payload)
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
        'customers/{customerFid}/subscriptions/{subscriptionFid}/retentionFlow/{flowSearch}'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Abandon a retention flow
   *
   * @return RetentionFlowStateRequest
   */
  public function setAbandon()
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
        'customers/{customerFid}/subscriptions/{subscriptionFid}/retentionFlow/{flowSearch}/abandon'
      )
    ));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
