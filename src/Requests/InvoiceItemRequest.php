<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class InvoiceItemRequest
  extends EntityRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "totalAmount" => $this->getTotalAmount(),
        "subItems" => $this->getSubItems(),
      ]
    );
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
        $return->subItems[$itemKey] = (new InvoiceSubItemRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
