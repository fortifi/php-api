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
  protected $_edges;
  protected $_verificationFid;
  protected $_initialMessage;
  protected $_language;
  protected $_context;
  protected $_impact;
  protected $_urgency;
  protected $_priority;
  protected $_notes;

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
    if(isset($data["edges"]))
    {
      $this->_edges = (string)$data["edges"];
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
    if(isset($data["context"]))
    {
      $this->_context = $data["context"];
    }
    if(isset($data["impact"]))
    {
      $this->_impact = (int)$data["impact"];
    }
    if(isset($data["urgency"]))
    {
      $this->_urgency = (int)$data["urgency"];
    }
    if(isset($data["priority"]))
    {
      $this->_priority = (int)$data["priority"];
    }
    if(isset($data["notes"]))
    {
      $this->_notes = [];
      foreach($data["notes"] as $dItem)
      {
        $dObj = new KeyValuePayload();
        $dObj->hydrate($dItem);
        $this->_notes[] = $dObj;
      }
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
        "edges"              => $this->_edges,
        "verificationFid"    => $this->_verificationFid,
        "initialMessage"     => $this->_initialMessage,
        "language"           => $this->_language,
        "context"            => $this->_context,
        "impact"             => $this->_impact,
        "urgency"            => $this->_urgency,
        "priority"           => $this->_priority,
        "notes"              => $this->_notes,
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
  public function setEdges(?string $value)
  {
    $this->_edges = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getEdges($default = null, $trim = true)
  {
    $value = $this->_edges ?: $default;
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

  /**
   * @param  $value
   *
   * @return $this
   */
  public function setContext($value)
  {
    $this->_context = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return object
   */
  public function getContext($default = null)
  {
    return $this->_context ?: $default;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setImpact(?int $value)
  {
    $this->_impact = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getImpact($default = null)
  {
    return $this->_impact ?: $default;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setUrgency(?int $value)
  {
    $this->_urgency = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getUrgency($default = null)
  {
    return $this->_urgency ?: $default;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setPriority(?int $value)
  {
    $this->_priority = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getPriority($default = null)
  {
    return $this->_priority ?: $default;
  }

  /**
   * @param KeyValuePayload[] $value
   *
   * @return $this
   */
  public function setNotes(?array $value)
  {
    $this->_notes = $value;
    return $this;
  }

  /**
   * @param KeyValuePayload $item
   *
   * @return $this
   */
  public function addNote(KeyValuePayload $item)
  {
    $this->_notes[] = $item;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return KeyValuePayload[]
   */
  public function getNotes($default = [])
  {
    return $this->_notes ?: $default;
  }
}
