<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\PropertyDefinitionsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class PropertiesEndpoint extends ApiEndpoint
{
  protected $_path = 'properties';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @summary Get defined properties
   *
   * @param $baseFids
   *
   * @return PropertyDefinitionsRequest
   */
  public function all($baseFids)
  {
    $request = new PropertyDefinitionsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('properties'));
    $detail->addQueryField('baseFids', $baseFids);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
