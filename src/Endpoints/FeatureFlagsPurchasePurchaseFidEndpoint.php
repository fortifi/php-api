<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\EntityFeatureFlagsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class FeatureFlagsPurchasePurchaseFidEndpoint extends ApiEndpoint
{
  protected $_path = 'featureFlags/purchase/{purchaseFid}';
  protected $_replacements = [];

  public function __construct($purchaseFid)
  {
    $this->_replacements['{purchaseFid}'] = $purchaseFid;
  }

  /**
   * @summary Retrieve Feature Flags for a given entity
   *
   * @return EntityFeatureFlagsRequest
   */
  public function retrieve()
  {
    $request = new EntityFeatureFlagsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'featureFlags/purchase/{purchaseFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
