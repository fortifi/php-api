<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class CoinbaseCheckoutRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "checkoutID" => $this->getCheckoutID(),
    ];
  }

  /**
   * Coinbase checkout ID
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCheckoutID($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'checkoutID', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
