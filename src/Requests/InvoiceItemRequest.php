<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class InvoiceItemRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "purchaseItem" => $this->getPurchaseItem(),
      "purchaseFid" => $this->getPurchaseFid(),
      "invoiceSubItems" => $this->getInvoiceSubItems(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPurchaseItem($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'purchaseItem', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPurchaseFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'purchaseFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return InvoiceSubItemsRequest[]
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
        $tmp[] = (new InvoiceSubItemsRequest())
          ->hydrate($itm);
      }
      $return->invoiceSubItems = $tmp;
    }

    return $return;
  }
}
