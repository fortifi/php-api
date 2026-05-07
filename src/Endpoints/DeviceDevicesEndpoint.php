<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class DeviceDevicesEndpoint extends ApiEndpoint
{
  protected $_path = 'device/devices';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $hardwareId
   *
   * @return DeviceDevicesHardwareIdEndpoint
   */
  public function with($hardwareId)
  {
    $endpoint = new DeviceDevicesHardwareIdEndpoint(
      $hardwareId
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
