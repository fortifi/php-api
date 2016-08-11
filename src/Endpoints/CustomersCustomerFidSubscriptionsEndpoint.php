<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\SubscriptionsRequest;
use Fortifi\Api\V1\Payloads\ModifySubscriptionPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidSubscriptionsEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/subscriptions';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @param $subscriptionFid
   *
   * @return CustomersCustomerFidSubscriptionsSubscriptionFidEndpoint
   */
  public function with($subscriptionFid)
  {
    $endpoint = new CustomersCustomerFidSubscriptionsSubscriptionFidEndpoint(
      $this->_replacements['{customerFid}'],
      $subscriptionFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary List of subscription summaries for given customer
   *
   * @param $limit
   * @param $page
   *
   * @return SubscriptionsRequest
   */
  public function all($limit = null, $page = null)
  {
    $request = new SubscriptionsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/subscriptions'
      )
    ));
    $detail->addQueryField('limit', $limit);
    $detail->addQueryField('page', $page);
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
        'customers/{customerFid}/subscriptions/modify'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
