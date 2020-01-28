<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ResourceAllocationsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidSubscriptionsSubscriptionFidAllocationsEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/subscriptions/{subscriptionFid}/allocations';
  protected $_replacements = [];

  public function __construct($customerFid, $subscriptionFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
    $this->_replacements['{subscriptionFid}'] = $subscriptionFid;
  }

  /**
   * @summary Retreive a subscriptions resource allocations
   *
   * @return ResourceAllocationsRequest
   */
  public function all()
  {
    $request = new ResourceAllocationsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/subscriptions/{subscriptionFid}/allocations'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
