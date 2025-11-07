<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class FeatureFlagsPurchaseEndpoint extends ApiEndpoint
{
  protected $_path = 'featureFlags/purchase';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $purchaseFid
   *
   * @return FeatureFlagsPurchasePurchaseFidEndpoint
   */
  public function with($purchaseFid)
  {
    $endpoint = new FeatureFlagsPurchasePurchaseFidEndpoint(
      $purchaseFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
