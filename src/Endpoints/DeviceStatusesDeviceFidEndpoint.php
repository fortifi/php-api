<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ContactStatusesRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class DeviceStatusesDeviceFidEndpoint extends ApiEndpoint
{
  protected $_path = 'device/statuses/{deviceFid}';
  protected $_replacements = [];

  public function __construct($deviceFid)
  {
    $this->_replacements['{deviceFid}'] = $deviceFid;
  }

  /**
   * @summary List contact status
   *
   * @param $brandFid
   * @param $groupFid
   *
   * @return ContactStatusesRequest
   */
  public function retrieve($brandFid = null, $groupFid = null)
  {
    $request = new ContactStatusesRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'device/statuses/{deviceFid}'
      )
    ));
    $detail->addQueryField('brandFid', $brandFid);
    $detail->addQueryField('groupFid', $groupFid);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
