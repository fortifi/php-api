<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class InvoiceItemRequest
  extends EntityRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "productFid" => $this->getProductFid(),
        "totalAmount" => $this->getTotalAmount(),
        "subItems" => $this->getSubItems(),
      ]
    );
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getProductFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'productFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getTotalAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'totalAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return InvoiceSubItemRequest[]
   */
  public function getSubItems($default = [])
  {
    return Objects::property($this->_getResultJson(), 'subItems', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->subItems))
    {
      foreach($return->subItems as $itmKey => $itm)
      {
        $return->subItems[$itmKey] = (new InvoiceSubItemRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
