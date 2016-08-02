<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class SubscriptionsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "invoices" => $this->getInvoices(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return SubscriptionRequest[]
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
      $tmp = [];
      foreach($return->invoices as $itm)
      {
        $tmp[] = (new SubscriptionRequest())
          ->hydrate($itm);
      }
      $return->invoices = $tmp;
    }

    return $return;
  }
}
