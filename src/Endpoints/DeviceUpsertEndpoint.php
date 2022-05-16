<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\FidRequest;
use Fortifi\Api\V1\Payloads\UpsertDevicePayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class DeviceUpsertEndpoint extends ApiEndpoint
{
  protected $_path = 'device/upsert';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @summary Create a Device or update and existing one
   *
   * @param UpsertDevicePayload $payload
   *
   * @return FidRequest
   */
  public function create(UpsertDevicePayload $payload)
  {
    $request = new FidRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('device/upsert'));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
