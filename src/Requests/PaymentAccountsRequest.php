<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PaymentAccountsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "accounts" => $this->getAccounts(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return PaymentAccountRequest[]
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
        $return->accounts[$itmKey] = (new PaymentAccountRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
