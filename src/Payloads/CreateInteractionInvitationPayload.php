<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class CreateInteractionInvitationPayload
  extends StartInteractionPayload
  implements \JsonSerializable
{
  protected $_topic;
  protected $_earliestStartTime;
  protected $_expiryTime;
  protected $_journeyTrackingFid;
  protected $_verificationFid;
  protected $_initialMessage;
  protected $_language;

  public function hydrate($data)
  {
    $data = (array)$data;
    parent::hydrate($data);
    if(isset($data["topic"]))
    {
      $this->_topic = (string)$data["topic"];
    }
    if(isset($data["earliestStartTime"]))
    {
      $this->_earliestStartTime = (string)$data["earliestStartTime"];
    }
    if(isset($data["expiryTime"]))
    {
      $this->_expiryTime = (string)$data["expiryTime"];
    }
    if(isset($data["journeyTrackingFid"]))
    {
      $this->_journeyTrackingFid = (string)$data["journeyTrackingFid"];
    }
    if(isset($data["verificationFid"]))
    {
      $this->_verificationFid = (string)$data["verificationFid"];
    }
    if(isset($data["initialMessage"]))
    {
      $this->_initialMessage = (string)$data["initialMessage"];
    }
    if(isset($data["language"]))
    {
      $this->_language = (string)$data["language"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "topic"              => $this->_topic,
        "earliestStartTime"  => $this->_earliestStartTime,
        "expiryTime"         => $this->_expiryTime,
        "journeyTrackingFid" => $this->_journeyTrackingFid,
        "verificationFid"    => $this->_verificationFid,
        "initialMessage"     => $this->_initialMessage,
        "language"           => $this->_language,
      ]
    );
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setTopic(?string $value)
  {
    $this->_topic = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTopic($default = null, $trim = true)
  {
    $value = $this->_topic ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setEarliestStartTime(?string $value)
  {
    $this->_earliestStartTime = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getEarliestStartTime($default = null, $trim = true)
  {
    $value = $this->_earliestStartTime ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setExpiryTime(?string $value)
  {
    $this->_expiryTime = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getExpiryTime($default = null, $trim = true)
  {
    $value = $this->_expiryTime ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setJourneyTrackingFid(?string $value)
  {
    $this->_journeyTrackingFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getJourneyTrackingFid($default = null, $trim = true)
  {
    $value = $this->_journeyTrackingFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setVerificationFid(?string $value)
  {
    $this->_verificationFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getVerificationFid($default = null, $trim = true)
  {
    $value = $this->_verificationFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setInitialMessage(?string $value)
  {
    $this->_initialMessage = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getInitialMessage($default = null, $trim = true)
  {
    $value = $this->_initialMessage ?: $default;
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
}