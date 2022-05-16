<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class DeviceEndpoint extends ApiEndpoint
{
  protected $_path = 'device';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @return DeviceUpsertEndpoint
   */
  public function upsert()
  {
    $endpoint = new DeviceUpsertEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
