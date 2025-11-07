<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class FeatureFlagsEndpoint extends ApiEndpoint
{
  protected $_path = 'featureFlags';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @return FeatureFlagsPurchaseEndpoint
   */
  public function purchase()
  {
    $endpoint = new FeatureFlagsPurchaseEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return FeatureFlagsCustomerEndpoint
   */
  public function customer()
  {
    $endpoint = new FeatureFlagsCustomerEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return FeatureFlagsEntityEndpoint
   */
  public function entity()
  {
    $endpoint = new FeatureFlagsEntityEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
