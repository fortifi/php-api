<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class DeviceHardwareIdEndpoint extends ApiEndpoint
{
  protected $_path = 'device/{hardwareId}';
  protected $_replacements = [];

  public function __construct($hardwareId)
  {
    $this->_replacements['{hardwareId}'] = $hardwareId;
  }

  /**
   * @summary Remove a Device
   *
   * @param $entityFid
   *
   * @return ApiRequest
   */
  public function delete($entityFid = null)
  {
    $request = new ApiRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'device/{hardwareId}'
      )
    ));
    $detail->addQueryField('entityFid', $entityFid);
    $detail->setMethod('DELETE');
    $request->setRequestDetail($detail);
    return $request;
  }
}
