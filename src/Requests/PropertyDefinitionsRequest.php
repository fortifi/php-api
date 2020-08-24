<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PropertyDefinitionsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "properties" => $this->getProperties(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return PropertyDefinitionRequest[]
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
        $return->properties[$itmKey] = (new PropertyDefinitionRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
