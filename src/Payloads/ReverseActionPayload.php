<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class ReverseActionPayload
  implements \JsonSerializable
{
  /**
   * User Agent of the visitors browser 'HTTP_USER_AGENT'
   */
  protected $_userAgent;
  /**
   * Encoding from the visitors browser 'HTTP_ACCEPT_ENCODING'
   */
  protected $_encoding;
  /**
   * Language from visitors browser 'HTTP_ACCEPT_LANGUAGE'
   */
  protected $_language;
  /**
   * IP Address of the visitor
   */
  protected $_clientIp;
  /**
   * External (to Fortifi) Reference for this visitor e.g. a user ID
   */
  protected $_externalReference;
  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   */
  protected $_time;
  protected $_metaData;
  /**
   * Your unique transaction ID for the event to be reversed
   */
  protected $_sourceTransactionId;
  /**
   * The reason for reversing the action
   */
  protected $_reason;
  /**
   * Amount of revene refunded to the client from the original transaction / chargeback amount
   */
  protected $_reversalAmount;
  /**
   * Your unique transaction ID for this event e.g. Refund ID
   */
  protected $_reversalId;
  /**
   * If known, the Fortifi event ID for this visitors action
   */
  protected $_eventId;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["userAgent"]))
    {
      $this->_userAgent = (string)$data["userAgent"];
    }
    if(isset($data["encoding"]))
    {
      $this->_encoding = (string)$data["encoding"];
    }
    if(isset($data["language"]))
    {
      $this->_language = (string)$data["language"];
    }
    if(isset($data["clientIp"]))
    {
      $this->_clientIp = (string)$data["clientIp"];
    }
    if(isset($data["externalReference"]))
    {
      $this->_externalReference = (string)$data["externalReference"];
    }
    if(isset($data["time"]))
    {
      $this->_time = (string)$data["time"];
    }
    if(isset($data["metaData"]))
    {
      $this->_metaData = [];
      foreach($data["metaData"] as $dItem)
      {
        $dObj = new KeyValuePayload();
        $dObj->hydrate($dItem);
        $this->_metaData[] = $dObj;
      }
    }
    if(isset($data["sourceTransactionId"]))
    {
      $this->_sourceTransactionId = (string)$data["sourceTransactionId"];
    }
    if(isset($data["reason"]))
    {
      $this->_reason = (string)$data["reason"];
    }
    if(isset($data["reversalAmount"]))
    {
      $this->_reversalAmount = (float)$data["reversalAmount"];
    }
    if(isset($data["reversalId"]))
    {
      $this->_reversalId = (string)$data["reversalId"];
    }
    if(isset($data["eventId"]))
    {
      $this->_eventId = (string)$data["eventId"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "userAgent"           => $this->_userAgent,
      "encoding"            => $this->_encoding,
      "language"            => $this->_language,
      "clientIp"            => $this->_clientIp,
      "externalReference"   => $this->_externalReference,
      "time"                => $this->_time,
      "metaData"            => $this->_metaData,
      "sourceTransactionId" => $this->_sourceTransactionId,
      "reason"              => $this->_reason,
      "reversalAmount"      => $this->_reversalAmount,
      "reversalId"          => $this->_reversalId,
      "eventId"             => $this->_eventId,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setUserAgent(?string $value)
  {
    $this->_userAgent = $value;
    return $this;
  }

  /**
   * User Agent of the visitors browser 'HTTP_USER_AGENT'
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getUserAgent($default = null, $trim = true)
  {
    $value = $this->_userAgent ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setEncoding(?string $value)
  {
    $this->_encoding = $value;
    return $this;
  }

  /**
   * Encoding from the visitors browser 'HTTP_ACCEPT_ENCODING'
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getEncoding($default = null, $trim = true)
  {
    $value = $this->_encoding ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setLanguage(?string $value)
  {
    $this->_language = $value;
    return $this;
  }

  /**
   * Language from visitors browser 'HTTP_ACCEPT_LANGUAGE'
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getLanguage($default = null, $trim = true)
  {
    $value = $this->_language ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setClientIp(?string $value)
  {
    $this->_clientIp = $value;
    return $this;
  }

  /**
   * IP Address of the visitor
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getClientIp($default = null, $trim = true)
  {
    $value = $this->_clientIp ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setExternalReference(?string $value)
  {
    $this->_externalReference = $value;
    return $this;
  }

  /**
   * External (to Fortifi) Reference for this visitor e.g. a user ID
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getExternalReference($default = null, $trim = true)
  {
    $value = $this->_externalReference ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setTime(?string $value)
  {
    $this->_time = $value;
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
  public function getTime($default = null, $trim = true)
  {
    $value = $this->_time ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param KeyValuePayload[] $value
   *
   * @return $this
   */
  public function setMetaData(?array $value)
  {
    $this->_metaData = $value;
    return $this;
  }

  /**
   * @param KeyValuePayload $item
   *
   * @return $this
   */
  public function addMetaDatum(KeyValuePayload $item)
  {
    $this->_metaData[] = $item;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return KeyValuePayload[]
   */
  public function getMetaData($default = [])
  {
    return $this->_metaData ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSourceTransactionId(?string $value)
  {
    $this->_sourceTransactionId = $value;
    return $this;
  }

  /**
   * Your unique transaction ID for the event to be reversed
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSourceTransactionId($default = null, $trim = true)
  {
    $value = $this->_sourceTransactionId ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  const REASON_CHARGEBACK = 'chargeback';
  const REASON_CANCEL = 'cancel';
  const REASON_FRAUD = 'fraud';

  /**
   * @param string $value chargeback, cancel, fraud
   *
   * @return $this
   */
  public function setReason(?string $value)
  {
    $this->_reason = $value;
    return $this;
  }

  /**
   * The reason for reversing the action
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getReason($default = null, $trim = true)
  {
    $value = $this->_reason ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param float $value
   *
   * @return $this
   */
  public function setReversalAmount(?float $value)
  {
    $this->_reversalAmount = $value;
    return $this;
  }

  /**
   * Amount of revene refunded to the client from the original transaction / chargeback amount
   *
   * @param mixed $default
   *
   * @return float
   */
  public function getReversalAmount($default = null)
  {
    return $this->_reversalAmount ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setReversalId(?string $value)
  {
    $this->_reversalId = $value;
    return $this;
  }

  /**
   * Your unique transaction ID for this event e.g. Refund ID
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getReversalId($default = null, $trim = true)
  {
    $value = $this->_reversalId ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setEventId(?string $value)
  {
    $this->_eventId = $value;
    return $this;
  }

  /**
   * If known, the Fortifi event ID for this visitors action
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getEventId($default = null, $trim = true)
  {
    $value = $this->_eventId ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
