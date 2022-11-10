<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class InvoiceCreditNotePayload
  implements \JsonSerializable
{
  protected $_displayName;
  protected $_description;
  /**
   * Charge Request FID
   */
  protected $_chargeRequestFid;
  /**
   * Credit amount type
   * @required
   */
  protected $_creditAmountType;
  /**
   * @required
   */
  protected $_amount;
  /**
   * Reason FID
   */
  protected $_reasonFid;
  /**
   * Currency
   */
  protected $_currency;

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
    if(isset($data["chargeRequestFid"]))
    {
      $this->_chargeRequestFid = (string)$data["chargeRequestFid"];
    }
    if(isset($data["creditAmountType"]))
    {
      $this->_creditAmountType = (string)$data["creditAmountType"];
    }
    if(isset($data["amount"]))
    {
      $this->_amount = (float)$data["amount"];
    }
    if(isset($data["reasonFid"]))
    {
      $this->_reasonFid = (string)$data["reasonFid"];
    }
    if(isset($data["currency"]))
    {
      $this->_currency = (string)$data["currency"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "displayName"      => $this->_displayName,
      "description"      => $this->_description,
      "chargeRequestFid" => $this->_chargeRequestFid,
      "creditAmountType" => $this->_creditAmountType,
      "amount"           => $this->_amount,
      "reasonFid"        => $this->_reasonFid,
      "currency"         => $this->_currency,
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
  public function setChargeRequestFid(?string $value)
  {
    $this->_chargeRequestFid = $value;
    return $this;
  }

  /**
   * Charge Request FID
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getChargeRequestFid($default = null, $trim = true)
  {
    $value = $this->_chargeRequestFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  const CREDIT_AMOUNT_TYPE_PERCENT_OF_REMAINING = 'percent_of_remaining';
  const CREDIT_AMOUNT_TYPE_PERCENT_OF_TOTAL = 'percent_of_total';
  const CREDIT_AMOUNT_TYPE_FIXED = 'fixed';

  /**
   * @param string $value percent_of_remaining, percent_of_total, fixed
   *
   * @return $this
   */
  public function setCreditAmountType(?string $value)
  {
    $this->_creditAmountType = $value;
    return $this;
  }

  /**
   * Credit amount type
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCreditAmountType($default = null, $trim = true)
  {
    $value = $this->_creditAmountType ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param float $value
   *
   * @return $this
   */
  public function setAmount(?float $value)
  {
    $this->_amount = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getAmount($default = null)
  {
    return $this->_amount ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setReasonFid(?string $value)
  {
    $this->_reasonFid = $value;
    return $this;
  }

  /**
   * Reason FID
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getReasonFid($default = null, $trim = true)
  {
    $value = $this->_reasonFid ?: $default;
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
   * Currency
   *
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
}
