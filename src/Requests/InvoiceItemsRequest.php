<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class InvoiceItemsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "invoiceItems" => $this->getInvoiceItems(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return InvoiceItemRequest[]
   */
  public function getInvoiceItems($default = [])
  {
    return Objects::property($this->_getResultJson(), 'invoiceItems', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->invoiceItems))
    {
      $tmp = [];
      foreach($return->invoiceItems as $itm)
      {
        $tmp[] = (new InvoiceItemRequest())
          ->hydrate($itm);
      }
      $return->invoiceItems = $tmp;
    }

    return $return;
  }
}
