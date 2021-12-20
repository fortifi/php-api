<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\RetentionFlowStateRequest;
use Fortifi\Api\V1\Payloads\StartRetentionFlowPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidSubscriptionsSubscriptionFidRetentionFlowEmptyEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/subscriptions/{subscriptionFid}/retentionFlow/empty';
  protected $_replacements = [];

  public function __construct($customerFid, $subscriptionFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
    $this->_replacements['{subscriptionFid}'] = $subscriptionFid;
  }

  /**
   * @summary Create an empty retention flow
   *
   * @param StartRetentionFlowPayload $payload
   *
   * @return RetentionFlowStateRequest
   */
  public function create(StartRetentionFlowPayload $payload)
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
        'customers/{customerFid}/subscriptions/{subscriptionFid}/retentionFlow/empty'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
