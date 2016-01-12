<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;

class OrderProductRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "fid" => $this->getFid(),
      "displayName" => $this->getDisplayName(),
      "description" => $this->getDescription(),
      "price" => $this->getPrice(),
      "offerFid" => $this->getOfferFid(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getFid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'fid', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getDisplayName($default = null)
  {
    return Objects::property($this->_getResultJson(), 'displayName', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getDescription($default = null)
  {
    return Objects::property($this->_getResultJson(), 'description', $default);
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
   *
   * @return string
   */
  public function getOfferFid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'offerFid', $default);
  }
}
