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
      "defaultPrice" => $this->getDefaultPrice(),
      "taxable" => $this->getTaxable(),
      "taxGroupFid" => $this->getTaxGroupFid(),
      "maxQuantity" => $this->getMaxQuantity(),
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
   * @return ProductPriceRequest
   */
  public function getDefaultPrice($default = null)
  {
    return Objects::property($this->_getResultJson(), 'defaultPrice', $default);
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
  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    $return->defaultPrice = (new ProductPriceRequest())->hydrate($return->defaultPrice);

    return $return;
  }
}
      
