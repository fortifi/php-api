<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class CreditNoteRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "creditNoteFid" => $this->getCreditNoteFid(),
      "creditNoteReason" => $this->getCreditNoteReason(),
      "amount" => $this->getAmount(),
      "currency" => $this->getCurrency(),
      "creditNoteType" => $this->getCreditNoteType(),
      "dateCreated" => $this->getDateCreated(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCreditNoteFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'creditNoteFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCreditNoteReason($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'creditNoteReason', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'amount', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCurrency($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'currency', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCreditNoteType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'creditNoteType', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDateCreated($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'dateCreated', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
