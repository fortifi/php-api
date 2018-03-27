<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ProductRequest
  extends EntityRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "productType" => $this->getProductType(),
        "parentFid" => $this->getParentFid(),
        "statementDescription" => $this->getStatementDescription(),
        "trialDays" => $this->getTrialDays(),
        "defaultPriceFid" => $this->getDefaultPriceFid(),
        "defaultPrice" => $this->getDefaultPrice(),
        "taxable" => $this->getTaxable(),
        "taxGroupFid" => $this->getTaxGroupFid(),
        "maxQuantity" => $this->getMaxQuantity(),
        "allowQuantity" => $this->getAllowQuantity(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getProductType($default = null)
  {
    return Objects::property($this->_getResultJson(), 'productType', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getParentFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'parentFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getStatementDescription($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'statementDescription', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getTrialDays($default = null)
  {
    return Objects::property($this->_getResultJson(), 'trialDays', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDefaultPriceFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'defaultPriceFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
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
   * @return integer
   */
  public function getTaxable($default = null)
  {
    return Objects::property($this->_getResultJson(), 'taxable', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTaxGroupFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'taxGroupFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getMaxQuantity($default = null)
  {
    return Objects::property($this->_getResultJson(), 'maxQuantity', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getAllowQuantity($default = null)
  {
    return Objects::property($this->_getResultJson(), 'allowQuantity', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->defaultPrice))
    {
      $return->defaultPrice = (new ProductPriceRequest())
        ->hydrate($return->defaultPrice);
    }

    return $return;
  }
}
