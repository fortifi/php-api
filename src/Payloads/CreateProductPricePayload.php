<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class CreateProductPricePayload
  implements \JsonSerializable
{
  protected $_displayName;
  protected $_description;
  protected $_priceBandFid;
  protected $_currency;
  protected $_price;
  protected $_setupFee;
  protected $_cycleType;
  protected $_cycleTerm;
  protected $_cycleExact;
  protected $_suspendAfterDays;
  protected $_shouldSuspend;
  protected $_cancelDays;
  protected $_shouldCancel;
  protected $_invoiceDays;
  protected $_invoiceDueDelayDays;
  protected $_terminationFee;
  protected $_terminationType;
  protected $_suspendStyle;
  protected $_visibility;
  protected $_taxInclusive;
  protected $_country;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["displayName"]))
    {
      $this->_displayName = (string)$data["displayName"];
    }
    if(isset($data["description"]))
    {
      $this->_description = (string)$data["description"];
    }
    if(isset($data["priceBandFid"]))
    {
      $this->_priceBandFid = (string)$data["priceBandFid"];
    }
    if(isset($data["currency"]))
    {
      $this->_currency = (string)$data["currency"];
    }
    if(isset($data["price"]))
    {
      $this->_price = (float)$data["price"];
    }
    if(isset($data["setupFee"]))
    {
      $this->_setupFee = (float)$data["setupFee"];
    }
    if(isset($data["cycleType"]))
    {
      $this->_cycleType = (int)$data["cycleType"];
    }
    if(isset($data["cycleTerm"]))
    {
      $this->_cycleTerm = (int)$data["cycleTerm"];
    }
    if(isset($data["cycleExact"]))
    {
      $this->_cycleExact = (string)$data["cycleExact"];
    }
    if(isset($data["suspendAfterDays"]))
    {
      $this->_suspendAfterDays = (int)$data["suspendAfterDays"];
    }
    if(isset($data["shouldSuspend"]))
    {
      $this->_shouldSuspend = $data["shouldSuspend"];
    }
    if(isset($data["cancelDays"]))
    {
      $this->_cancelDays = (int)$data["cancelDays"];
    }
    if(isset($data["shouldCancel"]))
    {
      $this->_shouldCancel = $data["shouldCancel"];
    }
    if(isset($data["invoiceDays"]))
    {
      $this->_invoiceDays = (int)$data["invoiceDays"];
    }
    if(isset($data["invoiceDueDelayDays"]))
    {
      $this->_invoiceDueDelayDays = (int)$data["invoiceDueDelayDays"];
    }
    if(isset($data["terminationFee"]))
    {
      $this->_terminationFee = (float)$data["terminationFee"];
    }
    if(isset($data["terminationType"]))
    {
      $this->_terminationType = (string)$data["terminationType"];
    }
    if(isset($data["suspendStyle"]))
    {
      $this->_suspendStyle = (string)$data["suspendStyle"];
    }
    if(isset($data["visibility"]))
    {
      $this->_visibility = (int)$data["visibility"];
    }
    if(isset($data["taxInclusive"]))
    {
      $this->_taxInclusive = $data["taxInclusive"];
    }
    if(isset($data["country"]))
    {
      $this->_country = (string)$data["country"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "displayName"         => $this->_displayName,
      "description"         => $this->_description,
      "priceBandFid"        => $this->_priceBandFid,
      "currency"            => $this->_currency,
      "price"               => $this->_price,
      "setupFee"            => $this->_setupFee,
      "cycleType"           => $this->_cycleType,
      "cycleTerm"           => $this->_cycleTerm,
      "cycleExact"          => $this->_cycleExact,
      "suspendAfterDays"    => $this->_suspendAfterDays,
      "shouldSuspend"       => $this->_shouldSuspend,
      "cancelDays"          => $this->_cancelDays,
      "shouldCancel"        => $this->_shouldCancel,
      "invoiceDays"         => $this->_invoiceDays,
      "invoiceDueDelayDays" => $this->_invoiceDueDelayDays,
      "terminationFee"      => $this->_terminationFee,
      "terminationType"     => $this->_terminationType,
      "suspendStyle"        => $this->_suspendStyle,
      "visibility"          => $this->_visibility,
      "taxInclusive"        => $this->_taxInclusive,
      "country"             => $this->_country,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setDisplayName(?string $value)
  {
    $this->_displayName = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDisplayName($default = null, $trim = true)
  {
    $value = $this->_displayName ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setDescription(?string $value)
  {
    $this->_description = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDescription($default = null, $trim = true)
  {
    $value = $this->_description ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPriceBandFid(?string $value)
  {
    $this->_priceBandFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPriceBandFid($default = null, $trim = true)
  {
    $value = $this->_priceBandFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCurrency(?string $value)
  {
    $this->_currency = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCurrency($default = null, $trim = true)
  {
    $value = $this->_currency ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param float $value
   *
   * @return $this
   */
  public function setPrice(?float $value)
  {
    $this->_price = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getPrice($default = null)
  {
    return $this->_price ?: $default;
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
    return $this->_setupFee ?: $default;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setCycleType(?int $value)
  {
    $this->_cycleType = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getCycleType($default = null)
  {
    return $this->_cycleType ?: $default;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setCycleTerm(?int $value)
  {
    $this->_cycleTerm = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getCycleTerm($default = null)
  {
    return $this->_cycleTerm ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCycleExact(?string $value)
  {
    $this->_cycleExact = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCycleExact($default = null, $trim = true)
  {
    $value = $this->_cycleExact ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setSuspendAfterDays(?int $value)
  {
    $this->_suspendAfterDays = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getSuspendAfterDays($default = null)
  {
    return $this->_suspendAfterDays ?: $default;
  }

  /**
   * @param bool $value
   *
   * @return $this
   */
  public function setShouldSuspend(?bool $value)
  {
    $this->_shouldSuspend = $value;
    return $this;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isShouldSuspend($default = false)
  {
    return (bool)$this->_shouldSuspend ?: $default;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setCancelDays(?int $value)
  {
    $this->_cancelDays = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getCancelDays($default = null)
  {
    return $this->_cancelDays ?: $default;
  }

  /**
   * @param bool $value
   *
   * @return $this
   */
  public function setShouldCancel(?bool $value)
  {
    $this->_shouldCancel = $value;
    return $this;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isShouldCancel($default = false)
  {
    return (bool)$this->_shouldCancel ?: $default;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setInvoiceDays(?int $value)
  {
    $this->_invoiceDays = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getInvoiceDays($default = null)
  {
    return $this->_invoiceDays ?: $default;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setInvoiceDueDelayDays(?int $value)
  {
    $this->_invoiceDueDelayDays = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getInvoiceDueDelayDays($default = null)
  {
    return $this->_invoiceDueDelayDays ?: $default;
  }

  /**
   * @param float $value
   *
   * @return $this
   */
  public function setTerminationFee(?float $value)
  {
    $this->_terminationFee = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getTerminationFee($default = null)
  {
    return $this->_terminationFee ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setTerminationType(?string $value)
  {
    $this->_terminationType = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTerminationType($default = null, $trim = true)
  {
    $value = $this->_terminationType ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSuspendStyle(?string $value)
  {
    $this->_suspendStyle = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSuspendStyle($default = null, $trim = true)
  {
    $value = $this->_suspendStyle ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setVisibility(?int $value)
  {
    $this->_visibility = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getVisibility($default = null)
  {
    return $this->_visibility ?: $default;
  }

  /**
   * @param bool $value
   *
   * @return $this
   */
  public function setTaxInclusive(?bool $value)
  {
    $this->_taxInclusive = $value;
    return $this;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isTaxInclusive($default = false)
  {
    return (bool)$this->_taxInclusive ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCountry(?string $value)
  {
    $this->_country = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCountry($default = null, $trim = true)
  {
    $value = $this->_country ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
