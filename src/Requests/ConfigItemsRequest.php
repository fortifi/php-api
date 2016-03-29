<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ConfigItemsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "items" => $this->getItems(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return ConfigItemRequest[]
   */
  public function getItems($default = [])
  {
    return Objects::property($this->_getResultJson(), 'items', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->items))
    {
      $tmp = [];
      foreach($return->items as $itm)
      {
        $tmp[] = (new ConfigItemRequest())
          ->hydrate($itm);
      }
      $return->items = $tmp;
    }

    return $return;
  }
}