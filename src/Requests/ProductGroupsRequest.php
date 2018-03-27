<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ProductGroupsRequest
  extends ApiRequest
  implements \JsonSerializable
{

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
      $tmp = [];
      foreach($return->groups as $itm)
      {
        $tmp[] = (new ProductGroupRequest())
          ->hydrate($itm);
      }
      $return->groups = $tmp;
    }

    return $return;
  }
}