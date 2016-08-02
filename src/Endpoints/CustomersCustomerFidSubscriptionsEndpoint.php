<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\SubscriptionsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
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
   * @summary Retrieve all subscriptions for a customer
   *
   * @return SubscriptionsRequest
   */
  public function all()
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
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
