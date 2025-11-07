<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class FeatureFlagsEntityEndpoint extends ApiEndpoint
{
  protected $_path = 'featureFlags/entity';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @return FeatureFlagsEntityCombinedEndpoint
   */
  public function combined()
  {
    $endpoint = new FeatureFlagsEntityCombinedEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
