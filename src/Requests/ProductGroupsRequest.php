<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ProductGroupsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "groups" => $this->getGroups(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return ProductGroupRequest[]
   */
  public function getGroups($default = [])
  {
    return Objects::property($this->_getResultJson(), 'groups', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->groups))
    {
      foreach($return->groups as $itmKey => $itm)
      {
        $return->groups[$itmKey] = (new ProductGroupRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
