<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\BrandsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class BrandsEndpoint extends ApiEndpoint
{
  protected $_path = 'brands';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @summary Your Brand
   *
   * Retrieve a list of all the brands within your Fortifi account
   *
   * @return BrandsRequest
   */
  public function all()
  {
    $request = new BrandsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('brands'));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
