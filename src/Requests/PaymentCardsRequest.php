<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PaymentCardsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "cards" => $this->getCards(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return PaymentCardRequest[]
   */
  public function getCards($default = [])
  {
    return Objects::property($this->_getResultJson(), 'cards', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->cards))
    {
      foreach($return->cards as $itmKey => $itm)
      {
        $return->cards[$itmKey] = (new PaymentCardRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
