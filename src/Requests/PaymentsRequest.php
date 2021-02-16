<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PaymentsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "payments" => $this->getPayments(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return PaymentRequest[]
   */
  public function getPayments($default = [])
  {
    return Objects::property($this->_getResultJson(), 'payments', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->payments))
    {
      foreach($return->payments as $itmKey => $itm)
      {
        $return->payments[$itmKey] = (new PaymentRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
