<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\SubscriptionRequest;
use Fortifi\Api\V1\Payloads\ModifySubscriptionPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidSubscriptionsSubscriptionFidEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/subscriptions/{subscriptionFid}';
  protected $_replacements = [];

  public function __construct($customerFid, $subscriptionFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
    $this->_replacements['{subscriptionFid}'] = $subscriptionFid;
  }

  /**
   * @summary Retreive a specific subscription
   *
   * @return SubscriptionRequest
   */
  public function retrieve()
  {
    $request = new SubscriptionRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/subscriptions/{subscriptionFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary modify subscription product and term
   *
   * @param ModifySubscriptionPayload $payload
   *
   * @return ApiRequest
   */
  public function setModify(ModifySubscriptionPayload $payload)
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
        'customers/{customerFid}/subscriptions/{subscriptionFid}/modify'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
