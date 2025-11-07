<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\EntityFeatureFlagsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class FeatureFlagsCustomerCustomerFidEndpoint extends ApiEndpoint
{
  protected $_path = 'featureFlags/customer/{customerFid}';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @summary Retrieve Feature Flags for a given customer and their active subscriptions
   *
   * @return EntityFeatureFlagsRequest
   */
  public function retrieve()
  {
    $request = new EntityFeatureFlagsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'featureFlags/customer/{customerFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
