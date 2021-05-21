<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidSubscriptionsSubscriptionFidProvisioningEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/subscriptions/{subscriptionFid}/provisioning';
  protected $_replacements = [];

  public function __construct($customerFid, $subscriptionFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
    $this->_replacements['{subscriptionFid}'] = $subscriptionFid;
  }

  /**
   * @summary Retry the provisioning step
   *
   * @return ApiRequest
   */
  public function setRetry()
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
        'customers/{customerFid}/subscriptions/{subscriptionFid}/provisioning/retry'
      )
    ));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
