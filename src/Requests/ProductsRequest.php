<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;

class ProductsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "products" => $this->getProducts(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return ProductRequest[]
   */
  public function getProducts($default = [])
  {
    return Objects::property($this->_getResultJson(), 'products', $default);
  }
}
      
