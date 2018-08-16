<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PaymentRequest
  extends FidRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "direction" => $this->getDirection(),
        "currency" => $this->getCurrency(),
        "amount" => $this->getAmount(),
        "fee" => $this->getFee(),
        "feeCurrency" => $this->getFeeCurrency(),
        "type" => $this->getType(),
        "status" => $this->getStatus(),
        "transactionId" => $this->getTransactionId(),
        "statusCode" => $this->getStatusCode(),
        "statusMessage" => $this->getStatusMessage(),
        "statementDescriptor" => $this->getStatementDescriptor(),
        "orderFid" => $this->getOrderFid(),
        "invoiceFid" => $this->getInvoiceFid(),
        "fraudFid" => $this->getFraudFid(),
        "processed" => $this->isProcessed(),
        "processedDate" => $this->getProcessedDate(),
        "subGatewayFid" => $this->getSubGatewayFid(),
        "subGatewayName" => $this->getSubGatewayName(),
        "subGatewayTransactionId" => $this->getSubGatewayTransactionId(),
        "disputeFid" => $this->getDisputeFid(),
        "sourceAccountType" => $this->getSourceAccountType(),
      ]
    );
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDirection($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'direction', $default);
    return $trim ? Strings::ntrim($value) : $value;
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
   *
   * @return float
   */
  public function getAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'amount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getFee($default = null)
  {
    return Objects::property($this->_getResultJson(), 'fee', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getFeeCurrency($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'feeCurrency', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'type', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getStatus($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'status', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTransactionId($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'transactionId', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getStatusCode($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'statusCode', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getStatusMessage($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'statusMessage', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getStatementDescriptor($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'statementDescriptor', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getOrderFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'orderFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getInvoiceFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'invoiceFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getFraudFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'fraudFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isProcessed($default = false)
  {
    return Objects::property($this->_getResultJson(), 'processed', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getProcessedDate($default = null)
  {
    return Objects::property($this->_getResultJson(), 'processedDate', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSubGatewayFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'subGatewayFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSubGatewayName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'subGatewayName', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSubGatewayTransactionId($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'subGatewayTransactionId', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDisputeFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'disputeFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSourceAccountType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'sourceAccountType', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
