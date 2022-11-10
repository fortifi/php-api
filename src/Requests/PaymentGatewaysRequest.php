<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PaymentGatewaysRequest
  extends PaginationRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "gateways" => $this->getGateways(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return PaymentGatewayRequest[]
   */
  public function getGateways($default = [])
  {
    return Objects::property($this->_getResultJson(), 'gateways', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->gateways))
    {
      foreach($return->gateways as $itmKey => $itm)
      {
        $return->gateways[$itmKey] = (new PaymentGatewayRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
