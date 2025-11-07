<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class FeatureFlagsCustomerEndpoint extends ApiEndpoint
{
  protected $_path = 'featureFlags/customer';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $customerFid
   *
   * @return FeatureFlagsCustomerCustomerFidEndpoint
   */
  public function with($customerFid)
  {
    $endpoint = new FeatureFlagsCustomerCustomerFidEndpoint(
      $customerFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
