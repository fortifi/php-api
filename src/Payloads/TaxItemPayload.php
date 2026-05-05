<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class TaxItemPayload
  implements \JsonSerializable
{
  protected $_productFid;
  protected $_priceFid;
  protected $_offerFid;
  protected $_chargeSetup = true;
  protected $_taxCode;
  protected $_unitPrice;
  protected $_setupFee;
  protected $_quantity = 1;
  protected $_setupDiscount;
  protected $_discount;
  protected $_calculateInclusive;
  protected $_calculateExclusive;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["productFid"]))
    {
      $this->_productFid = (string)$data["productFid"];
    }
    if(isset($data["priceFid"]))
    {
      $this->_priceFid = (string)$data["priceFid"];
    }
    if(isset($data["offerFid"]))
    {
      $this->_offerFid = (string)$data["offerFid"];
    }
    if(isset($data["chargeSetup"]))
    {
      $this->_chargeSetup = $data["chargeSetup"];
    }
    if(isset($data["taxCode"]))
    {
      $this->_taxCode = (string)$data["taxCode"];
    }
    if(isset($data["unitPrice"]))
    {
      $this->_unitPrice = (float)$data["unitPrice"];
    }
    if(isset($data["setupFee"]))
    {
      $this->_setupFee = (float)$data["setupFee"];
    }
    if(isset($data["quantity"]))
    {
      $this->_quantity = (int)$data["quantity"];
    }
    if(isset($data["setupDiscount"]))
    {
      $this->_setupDiscount = (float)$data["setupDiscount"];
    }
    if(isset($data["discount"]))
    {
      $this->_discount = (float)$data["discount"];
    }
    if(isset($data["calculateInclusive"]))
    {
      $this->_calculateInclusive = $data["calculateInclusive"];
    }
    if(isset($data["calculateExclusive"]))
    {
      $this->_calculateExclusive = $data["calculateExclusive"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "productFid"         => $this->_productFid,
      "priceFid"           => $this->_priceFid,
      "offerFid"           => $this->_offerFid,
      "chargeSetup"        => $this->_chargeSetup,
      "taxCode"            => $this->_taxCode,
      "unitPrice"          => $this->_unitPrice,
      "setupFee"           => $this->_setupFee,
      "quantity"           => $this->_quantity,
      "setupDiscount"      => $this->_setupDiscount,
      "discount"           => $this->_discount,
      "calculateInclusive" => $this->_calculateInclusive,
      "calculateExclusive" => $this->_calculateExclusive,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setProductFid(?string $value)
  {
    $this->_productFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getProductFid($default = null, $trim = true)
  {
    $value = $this->_productFid ?? $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPriceFid(?string $value)
  {
    $this->_priceFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPriceFid($default = null, $trim = true)
  {
    $value = $this->_priceFid ?? $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setOfferFid(?string $value)
  {
    $this->_offerFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getOfferFid($default = null, $trim = true)
  {
    $value = $this->_offerFid ?? $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param bool $value
   *
   * @return $this
   */
  public function setChargeSetup(?bool $value)
  {
    $this->_chargeSetup = $value;
    return $this;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isChargeSetup($default = false)
  {
    return (bool)$this->_chargeSetup ?? $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setTaxCode(?string $value)
  {
    $this->_taxCode = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTaxCode($default = null, $trim = true)
  {
    $value = $this->_taxCode ?? $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param float $value
   *
   * @return $this
   */
  public function setUnitPrice(?float $value)
  {
    $this->_unitPrice = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getUnitPrice($default = null)
  {
    return $this->_unitPrice ?? $default;
  }

  /**
   * @param float $value
   *
   * @return $this
   */
  public function setSetupFee(?float $value)
  {
    $this->_setupFee = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getSetupFee($default = null)
  {
    return $this->_setupFee ?? $default;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setQuantity(?int $value)
  {
    $this->_quantity = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getQuantity($default = null)
  {
    return $this->_quantity ?? $default;
  }

  /**
   * @param float $value
   *
   * @return $this
   */
  public function setSetupDiscount(?float $value)
  {
    $this->_setupDiscount = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getSetupDiscount($default = null)
  {
    return $this->_setupDiscount ?? $default;
  }

  /**
   * @param float $value
   *
   * @return $this
   */
  public function setDiscount(?float $value)
  {
    $this->_discount = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getDiscount($default = null)
  {
    return $this->_discount ?? $default;
  }

  /**
   * @param bool $value
   *
   * @return $this
   */
  public function setCalculateInclusive(?bool $value)
  {
    $this->_calculateInclusive = $value;
    return $this;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isCalculateInclusive($default = false)
  {
    return (bool)$this->_calculateInclusive ?? $default;
  }

  /**
   * @param bool $value
   *
   * @return $this
   */
  public function setCalculateExclusive(?bool $value)
  {
    $this->_calculateExclusive = $value;
    return $this;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isCalculateExclusive($default = false)
  {
    return (bool)$this->_calculateExclusive ?? $default;
  }
}
