<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PaymentGatewayRequest
  extends EntityRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "externalId" => $this->getExternalId(),
        "enabled" => $this->isEnabled(),
        "brands" => $this->getBrands(),
        "currencies" => $this->getCurrencies(),
        "cardTypes" => $this->getCardTypes(),
        "provider" => $this->getProvider(),
      ]
    );
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getExternalId($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'externalId', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isEnabled($default = false)
  {
    return Objects::property($this->_getResultJson(), 'enabled', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string[]
   */
  public function getBrands($default = [])
  {
    return Objects::property($this->_getResultJson(), 'brands', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string[]
   */
  public function getCurrencies($default = [])
  {
    return Objects::property($this->_getResultJson(), 'currencies', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string[]
   */
  public function getCardTypes($default = [])
  {
    return Objects::property($this->_getResultJson(), 'cardTypes', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getProvider($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'provider', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);




    return $return;
  }
}
