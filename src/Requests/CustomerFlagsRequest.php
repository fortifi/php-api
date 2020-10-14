<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class CustomerFlagsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "qualified" => $this->isQualified(),
      "renewing" => $this->isRenewing(),
      "fraud" => $this->isFraud(),
      "chargeback" => $this->isChargeback(),
      "discount" => $this->isDiscount(),
      "impulse" => $this->isImpulse(),
      "refunded" => $this->isRefunded(),
      "hasSubscribed" => $this->isHasSubscribed(),
      "isSubscribed" => $this->isSubscribed(),
      "hasPurchased" => $this->isHasPurchased(),
      "loyal" => $this->isLoyal(),
      "vip" => $this->isVip(),
      "testAccount" => $this->isTestAccount(),
    ];
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isQualified($default = false)
  {
    return Objects::property($this->_getResultJson(), 'qualified', $default);
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isRenewing($default = false)
  {
    return Objects::property($this->_getResultJson(), 'renewing', $default);
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isFraud($default = false)
  {
    return Objects::property($this->_getResultJson(), 'fraud', $default);
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isChargeback($default = false)
  {
    return Objects::property($this->_getResultJson(), 'chargeback', $default);
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isDiscount($default = false)
  {
    return Objects::property($this->_getResultJson(), 'discount', $default);
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isImpulse($default = false)
  {
    return Objects::property($this->_getResultJson(), 'impulse', $default);
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isRefunded($default = false)
  {
    return Objects::property($this->_getResultJson(), 'refunded', $default);
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isHasSubscribed($default = false)
  {
    return Objects::property($this->_getResultJson(), 'hasSubscribed', $default);
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isSubscribed($default = false)
  {
    return Objects::property($this->_getResultJson(), 'isSubscribed', $default);
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isHasPurchased($default = false)
  {
    return Objects::property($this->_getResultJson(), 'hasPurchased', $default);
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isLoyal($default = false)
  {
    return Objects::property($this->_getResultJson(), 'loyal', $default);
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isVip($default = false)
  {
    return Objects::property($this->_getResultJson(), 'vip', $default);
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isTestAccount($default = false)
  {
    return Objects::property($this->_getResultJson(), 'testAccount', $default);
  }
}
