<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class InvoicesRequest
  extends PaginationRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "invoices" => $this->getInvoices(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return InvoiceSummaryRequest[]
   */
  public function getInvoices($default = [])
  {
    return Objects::property($this->_getResultJson(), 'invoices', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->invoices))
    {
      foreach($return->invoices as $itmKey => $itm)
      {
        $return->invoices[$itmKey] = (new InvoiceSummaryRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
