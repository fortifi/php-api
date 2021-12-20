<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\RetentionFlowOptionsRequest;
use Fortifi\Api\V1\Payloads\RetentionFlowOptionsPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidSubscriptionsSubscriptionFidRetentionFlowFlowSearchOptionsEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/subscriptions/{subscriptionFid}/retentionFlow/{flowSearch}/options';
  protected $_replacements = [];

  public function __construct($customerFid, $subscriptionFid, $flowSearch)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
    $this->_replacements['{subscriptionFid}'] = $subscriptionFid;
    $this->_replacements['{flowSearch}'] = $flowSearch;
  }

  /**
   * @summary Retrieve retention flow options
   *
   * @return RetentionFlowOptionsRequest
   */
  public function all()
  {
    $request = new RetentionFlowOptionsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/subscriptions/{subscriptionFid}/retentionFlow/{flowSearch}/options'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Set retention flow options
   *
   * @param RetentionFlowOptionsPayload $payload
   *
   * @return RetentionFlowOptionsRequest
   */
  public function create(RetentionFlowOptionsPayload $payload)
  {
    $request = new RetentionFlowOptionsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/subscriptions/{subscriptionFid}/retentionFlow/{flowSearch}/options'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
