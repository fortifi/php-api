<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\EntityFeatureFlagsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class FeatureFlagsEntityCombinedEndpoint extends ApiEndpoint
{
  protected $_path = 'featureFlags/entity/combined';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @summary Retrieve combined Feature Flags for a list of entities
   *
   * @param $fids
   *
   * @return EntityFeatureFlagsRequest
   */
  public function all($fids)
  {
    $request = new EntityFeatureFlagsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('featureFlags/entity/combined'));
    $detail->addQueryField('fids', $fids);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
