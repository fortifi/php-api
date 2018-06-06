<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class ConfigurationFinanceEndpoint extends ApiEndpoint
{
  protected $_path = 'configuration/finance';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @return ConfigurationFinanceGatewaysEndpoint
   */
  public function gateways()
  {
    $endpoint = new ConfigurationFinanceGatewaysEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
