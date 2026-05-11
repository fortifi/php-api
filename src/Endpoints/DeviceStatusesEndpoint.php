<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class DeviceStatusesEndpoint extends ApiEndpoint
{
  protected $_path = 'device/statuses';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $deviceFid
   *
   * @return DeviceStatusesDeviceFidEndpoint
   */
  public function with($deviceFid)
  {
    $endpoint = new DeviceStatusesDeviceFidEndpoint(
      $deviceFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
