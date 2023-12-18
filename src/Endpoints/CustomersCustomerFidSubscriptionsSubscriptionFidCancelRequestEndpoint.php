<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\V1\Payloads\CreateCancelRequestPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidSubscriptionsSubscriptionFidCancelRequestEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/subscriptions/{subscriptionFid}/cancelRequest';
  protected $_replacements = [];

  public function __construct($customerFid, $subscriptionFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
    $this->_replacements['{subscriptionFid}'] = $subscriptionFid;
  }

  /**
   * @summary Create a cancel request for a subscription
   *
   * @param CreateCancelRequestPayload $payload
   *
   * @return BoolMessageRequest
   */
  public function create(CreateCancelRequestPayload $payload)
  {
    $request = new BoolMessageRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/subscriptions/{subscriptionFid}/cancelRequest'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
