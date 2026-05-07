<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\DevicesRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class DeviceDevicesHardwareIdEndpoint extends ApiEndpoint
{
  protected $_path = 'device/devices/{hardwareId}';
  protected $_replacements = [];

  public function __construct($hardwareId)
  {
    $this->_replacements['{hardwareId}'] = $hardwareId;
  }

  /**
   * @summary Get devices by hardware ID
   *
   * @return DevicesRequest
   */
  public function retrieve()
  {
    $request = new DevicesRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'device/devices/{hardwareId}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
