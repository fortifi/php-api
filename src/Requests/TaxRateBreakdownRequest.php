<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class TaxRateBreakdownRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "percent" => $this->getPercent(),
      "amount" => $this->getAmount(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getPercent($default = null)
  {
    return Objects::property($this->_getResultJson(), 'percent', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'amount', $default);
  }
}
