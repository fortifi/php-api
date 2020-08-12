<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class AvailabilityCheckSuggestionRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "sku" => $this->getSku(),
      "properties" => $this->getProperties(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSku($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'sku', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * Properties that should be set for the sku to be available
   * 
   * @param mixed $default
   *
   * @return PropertyRequest[]
   */
  public function getProperties($default = [])
  {
    return Objects::property($this->_getResultJson(), 'properties', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->properties))
    {
      foreach($return->properties as $itmKey => $itm)
      {
        $return->properties[$itmKey] = (new PropertyRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
