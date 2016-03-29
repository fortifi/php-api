<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\LicenceRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class LicenceEndpoint extends ApiEndpoint
{
  protected $_path = 'licence';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @summary Retrieve A Licence
   *
   * @param $key
   *
   * @return LicenceRequest
   */
  public function check($key = null)
  {
    $request = new LicenceRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('licence/check'));
    $detail->addQueryField('key', $key);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
