<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ProductGroupRequest
  extends EntityRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "products" => $this->getProducts(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return FidRequest[]
   */
  public function getProducts($default = [])
  {
    return Objects::property($this->_getResultJson(), 'products', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->products))
    {
      foreach($return->products as $itmKey => $itm)
      {
        $return->products[$itmKey] = (new FidRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
