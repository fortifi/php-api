<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;

class OrderProductRequest
  extends EntityRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "price" => $this->getPrice(),
        "offerFid" => $this->getOfferFid(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getPrice($default = null)
  {
    return Objects::property($this->_getResultJson(), 'price', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getOfferFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'offerFid', $default);
    return $trim ? trim($value) : $value;
  }
}
