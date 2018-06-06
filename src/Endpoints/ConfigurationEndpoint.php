<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class ConfigurationEndpoint extends ApiEndpoint
{
  protected $_path = 'configuration';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @return ConfigurationFinanceEndpoint
   */
  public function finance()
  {
    $endpoint = new ConfigurationFinanceEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
