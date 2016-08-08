<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class InvoiceSubItemsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "invoiceSubItems" => $this->getInvoiceSubItems(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return InvoiceSubItemRequest[]
   */
  public function getInvoiceSubItems($default = [])
  {
    return Objects::property($this->_getResultJson(), 'invoiceSubItems', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->invoiceSubItems))
    {
      $tmp = [];
      foreach($return->invoiceSubItems as $itm)
      {
        $tmp[] = (new InvoiceSubItemRequest())
          ->hydrate($itm);
      }
      $return->invoiceSubItems = $tmp;
    }

    return $return;
  }
}
