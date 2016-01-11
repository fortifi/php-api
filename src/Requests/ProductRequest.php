<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;

class ProductRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "displayName" => $this->getDisplayName(),
      "description" => $this->getDescription(),
      "productType" => $this->getProductType(),
      "parentFid" => $this->getParentFid(),
      "statementDescription" => $this->getStatementDescription(),
      "trialDays" => $this->getTrialDays(),
      "defaultPriceFid" => $this->getDefaultPriceFid(),
      "taxable" => $this->getTaxable(),
      "taxGroupFid" => $this->getTaxGroupFid(),
      "maxQuantity" => $this->getMaxQuantity(),
      "configVerifyUrl" => $this->getConfigVerifyUrl(),
      "setupUrl" => $this->getSetupUrl(),
      "cancelUrl" => $this->getCancelUrl(),
      "suspendUrl" => $this->getSuspendUrl(),
      "reactivateUrl" => $this->getReactivateUrl(),
      "deleteUrl" => $this->getDeleteUrl(),
    ];
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
   * @return string
   */
  public function getProductType($default = null)
  {
    return Objects::property($this->_getResultJson(), 'productType', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getParentFid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'parentFid', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getStatementDescription($default = null)
  {
    return Objects::property($this->_getResultJson(), 'statementDescription', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getTrialDays($default = null)
  {
    return Objects::property($this->_getResultJson(), 'trialDays', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getDefaultPriceFid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'defaultPriceFid', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getTaxable($default = null)
  {
    return Objects::property($this->_getResultJson(), 'taxable', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getTaxGroupFid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'taxGroupFid', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getMaxQuantity($default = null)
  {
    return Objects::property($this->_getResultJson(), 'maxQuantity', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getConfigVerifyUrl($default = null)
  {
    return Objects::property($this->_getResultJson(), 'configVerifyUrl', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getSetupUrl($default = null)
  {
    return Objects::property($this->_getResultJson(), 'setupUrl', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getCancelUrl($default = null)
  {
    return Objects::property($this->_getResultJson(), 'cancelUrl', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getSuspendUrl($default = null)
  {
    return Objects::property($this->_getResultJson(), 'suspendUrl', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getReactivateUrl($default = null)
  {
    return Objects::property($this->_getResultJson(), 'reactivateUrl', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getDeleteUrl($default = null)
  {
    return Objects::property($this->_getResultJson(), 'deleteUrl', $default);
  }
}
      
