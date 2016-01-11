<?php
namespace Fortifi\Api\V1\Payloads;

use Fortifi\Api\V1\Requests\KeyValueRequest;

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
      $this->_userAgent = $data["userAgent"];
    }
    if(isset($data["encoding"]))
    {
      $this->_encoding = $data["encoding"];
    }
    if(isset($data["language"]))
    {
      $this->_language = $data["language"];
    }
    if(isset($data["clientIp"]))
    {
      $this->_clientIp = $data["clientIp"];
    }
    if(isset($data["externalReference"]))
    {
      $this->_externalReference = $data["externalReference"];
    }
    if(isset($data["time"]))
    {
      $this->_time = $data["time"];
    }
    if(isset($data["metaData"]))
    {
      $this->_metaData = $data["metaData"];
    }
    if(isset($data["sourceTransactionId"]))
    {
      $this->_sourceTransactionId = $data["sourceTransactionId"];
    }
    if(isset($data["reason"]))
    {
      $this->_reason = $data["reason"];
    }
    if(isset($data["reversalAmount"]))
    {
      $this->_reversalAmount = $data["reversalAmount"];
    }
    if(isset($data["reversalId"]))
    {
      $this->_reversalId = $data["reversalId"];
    }
    if(isset($data["eventId"]))
    {
      $this->_eventId = $data["eventId"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "userAgent" => $this->_userAgent,
      "encoding" => $this->_encoding,
      "language" => $this->_language,
      "clientIp" => $this->_clientIp,
      "externalReference" => $this->_externalReference,
      "time" => $this->_time,
      "metaData" => $this->_metaData,
      "sourceTransactionId" => $this->_sourceTransactionId,
      "reason" => $this->_reason,
      "reversalAmount" => $this->_reversalAmount,
      "reversalId" => $this->_reversalId,
      "eventId" => $this->_eventId,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setUserAgent($value)
  {
    $this->_userAgent = $value;
    return $this;
  }

  /**
   * User Agent of the visitors browser 'HTTP_USER_AGENT'
   * 
   * @param mixed $default
   *
   * @return string
   */
  public function getUserAgent($default = null)
  {
    return $this->_userAgent ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setEncoding($value)
  {
    $this->_encoding = $value;
    return $this;
  }

  /**
   * Encoding from the visitors browser 'HTTP_ACCEPT_ENCODING'
   * 
   * @param mixed $default
   *
   * @return string
   */
  public function getEncoding($default = null)
  {
    return $this->_encoding ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setLanguage($value)
  {
    $this->_language = $value;
    return $this;
  }

  /**
   * Language from visitors browser 'HTTP_ACCEPT_LANGUAGE'
   * 
   * @param mixed $default
   *
   * @return string
   */
  public function getLanguage($default = null)
  {
    return $this->_language ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setClientIp($value)
  {
    $this->_clientIp = $value;
    return $this;
  }

  /**
   * IP Address of the visitor
   * 
   * @param mixed $default
   *
   * @return string
   */
  public function getClientIp($default = null)
  {
    return $this->_clientIp ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setExternalReference($value)
  {
    $this->_externalReference = $value;
    return $this;
  }

  /**
   * External (to Fortifi) Reference for this visitor e.g. a user ID
   * 
   * @param mixed $default
   *
   * @return string
   */
  public function getExternalReference($default = null)
  {
    return $this->_externalReference ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setTime($value)
  {
    $this->_time = $value;
    return $this;
  }

  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   * 
   * @param mixed $default
   *
   * @return string
   */
  public function getTime($default = null)
  {
    return $this->_time ?: $default;
  }

  /**
   * @param array $value
   *
   * @return $this
   */
  public function setMetaData(array $value)
  {
    $this->_metaData = $value;
    return $this;
  }

  /**
   * @param $item
   * 
   * @return $this
   */
  public function addMetaData($item)
  {
    $this->_metaData[] = $item;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return KeyValueRequest[]
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
  public function setSourceTransactionId($value)
  {
    $this->_sourceTransactionId = $value;
    return $this;
  }

  /**
   * Your unique transaction ID for the event to be reversed
   * 
   * @param mixed $default
   *
   * @return string
   */
  public function getSourceTransactionId($default = null)
  {
    return $this->_sourceTransactionId ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setReason($value)
  {
    $this->_reason = $value;
    return $this;
  }

  /**
   * The reason for reversing the action
   * 
   * @param mixed $default
   *
   * @return string
   */
  public function getReason($default = null)
  {
    return $this->_reason ?: $default;
  }

  /**
   * @param integer $value
   *
   * @return $this
   */
  public function setReversalAmount($value)
  {
    $this->_reversalAmount = $value;
    return $this;
  }

  /**
   * Amount of revene refunded to the client from the original transaction / chargeback amount
   * 
   * @param mixed $default
   *
   * @return integer
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
  public function setReversalId($value)
  {
    $this->_reversalId = $value;
    return $this;
  }

  /**
   * Your unique transaction ID for this event e.g. Refund ID
   * 
   * @param mixed $default
   *
   * @return string
   */
  public function getReversalId($default = null)
  {
    return $this->_reversalId ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setEventId($value)
  {
    $this->_eventId = $value;
    return $this;
  }

  /**
   * If known, the Fortifi event ID for this visitors action
   * 
   * @param mixed $default
   *
   * @return string
   */
  public function getEventId($default = null)
  {
    return $this->_eventId ?: $default;
  }
}
      
