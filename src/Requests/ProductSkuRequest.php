<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ProductSkuRequest
  extends EntityRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "productFid" => $this->getProductFid(),
        "sku" => $this->getSku(),
        "priceBandFid" => $this->getPriceBandFid(),
        "resourcePoolFid" => $this->getResourcePoolFid(),
      ]
    );
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getProductFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'productFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSku($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'sku', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPriceBandFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'priceBandFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getResourcePoolFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'resourcePoolFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
