<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PaymentMethodsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "accounts" => $this->getAccounts(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return PaymentMethodRequest[]
   */
  public function getAccounts($default = [])
  {
    return Objects::property($this->_getResultJson(), 'accounts', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->accounts))
    {
      foreach($return->accounts as $itmKey => $itm)
      {
        $return->accounts[$itmKey] = (new PaymentMethodRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
