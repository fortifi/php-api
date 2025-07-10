<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class FindTransactionsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "transactions" => $this->getTransactions(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return FindTransactionRequest[]
   */
  public function getTransactions($default = [])
  {
    return Objects::property($this->_getResultJson(), 'transactions', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->transactions))
    {
      foreach($return->transactions as $itmKey => $itm)
      {
        $return->transactions[$itmKey] = (new FindTransactionRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
