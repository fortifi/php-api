<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PeopleRequest
  extends PaginationRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "items" => $this->getItems(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return PersonRequest[]
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
      foreach($return->items as $itmKey => $itm)
      {
        $return->items[$itmKey] = (new PersonRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
