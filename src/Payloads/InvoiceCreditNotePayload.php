<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class InvoiceCreditNotePayload
  implements \JsonSerializable
{
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
   * FID of the reason
   */
  protected $_reasonFid;
  /**
   * Currency
   */
  protected $_currency;
  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   */
  protected $_creditDate;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["chargeRequestFid"]))
    {
      $this->_chargeRequestFid = $data["chargeRequestFid"];
    }
    if(isset($data["creditAmountType"]))
    {
      $this->_creditAmountType = $data["creditAmountType"];
    }
    if(isset($data["amount"]))
    {
      $this->_amount = $data["amount"];
    }
    if(isset($data["reasonFid"]))
    {
      $this->_reasonFid = $data["reasonFid"];
    }
    if(isset($data["currency"]))
    {
      $this->_currency = $data["currency"];
    }
    if(isset($data["creditDate"]))
    {
      $this->_creditDate = $data["creditDate"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "chargeRequestFid" => $this->_chargeRequestFid,
      "creditAmountType" => $this->_creditAmountType,
      "amount"           => $this->_amount,
      "reasonFid"        => $this->_reasonFid,
      "currency"         => $this->_currency,
      "creditDate"       => $this->_creditDate,
    ];
  }

  /**
   * @param FidResponse $value
   *
   * @return $this
   */
  public function setChargeRequestFid(FidResponse $value)
  {
    $this->_chargeRequestFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return FidResponse
   */
  public function getChargeRequestFid($default = null)
  {
    return $this->_chargeRequestFid ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCreditAmountType($value)
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
  public function setAmount($value)
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
  public function setReasonFid($value)
  {
    $this->_reasonFid = $value;
    return $this;
  }

  /**
   * FID of the reason
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
  public function setCurrency($value)
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

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCreditDate($value)
  {
    $this->_creditDate = $value;
    return $this;
  }

  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCreditDate($default = null, $trim = true)
  {
    $value = $this->_creditDate ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
