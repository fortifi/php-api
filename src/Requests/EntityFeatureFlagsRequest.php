<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class EntityFeatureFlagsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "featureFlags" => $this->getFeatureFlags(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return EntityFeatureFlagRequest[]
   */
  public function getFeatureFlags($default = [])
  {
    return Objects::property($this->_getResultJson(), 'featureFlags', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->featureFlags))
    {
      foreach($return->featureFlags as $itmKey => $itm)
      {
        $return->featureFlags[$itmKey] = (new EntityFeatureFlagRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
