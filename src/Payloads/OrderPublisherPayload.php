<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class OrderPublisherPayload
  implements \JsonSerializable
{
  /**
   * (required) Trigger the publisher action when the order gets to this state
   */
  protected $_onState;
  /**
   * Visitor ID from the browser cookie
   */
  protected $_visitorId;
  /**
   * Your reference for the user (if visitor actions have been triggered before with this ID before, the visitor ID property is not required, and can be looked up by this id.
   */
  protected $_userReference;
  /**
   * (required) Marketing Action to trigger e.g. acquisition, lead
   */
  protected $_actionKey;
  /**
   * Campaign hash to allocate this action to (leave blank to use visitor ID values)
   */
  protected $_campaignHash;
  /**
   * Sub Tracking ID 1 (leave blank to use visitor ID values)
   */
  protected $_sid1;
  /**
   * Sub Tracking ID 2 (leave blank to use visitor ID values)
   */
  protected $_sid2;
  /**
   * Sub Tracking ID 3 (leave blank to use visitor ID values)
   */
  protected $_sid3;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["onState"]))
    {
      $this->_onState = (string)$data["onState"];
    }
    if(isset($data["visitorId"]))
    {
      $this->_visitorId = (string)$data["visitorId"];
    }
    if(isset($data["userReference"]))
    {
      $this->_userReference = (string)$data["userReference"];
    }
    if(isset($data["actionKey"]))
    {
      $this->_actionKey = (string)$data["actionKey"];
    }
    if(isset($data["campaignHash"]))
    {
      $this->_campaignHash = (string)$data["campaignHash"];
    }
    if(isset($data["sid1"]))
    {
      $this->_sid1 = (string)$data["sid1"];
    }
    if(isset($data["sid2"]))
    {
      $this->_sid2 = (string)$data["sid2"];
    }
    if(isset($data["sid3"]))
    {
      $this->_sid3 = (string)$data["sid3"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "onState"       => $this->_onState,
      "visitorId"     => $this->_visitorId,
      "userReference" => $this->_userReference,
      "actionKey"     => $this->_actionKey,
      "campaignHash"  => $this->_campaignHash,
      "sid1"          => $this->_sid1,
      "sid2"          => $this->_sid2,
      "sid3"          => $this->_sid3,
    ];
  }

  const ON_STATE_APPROVED = 'approved';
  const ON_STATE_SETUP = 'setup';
  const ON_STATE_COMPLETE = 'complete';

  /**
   * @param string $value approved, setup, complete
   *
   * @return $this
   */
  public function setOnState(?string $value)
  {
    $this->_onState = $value;
    return $this;
  }

  /**
   * (required) Trigger the publisher action when the order gets to this state
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getOnState($default = null, $trim = true)
  {
    $value = $this->_onState ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setVisitorId(?string $value)
  {
    $this->_visitorId = $value;
    return $this;
  }

  /**
   * Visitor ID from the browser cookie
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getVisitorId($default = null, $trim = true)
  {
    $value = $this->_visitorId ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setUserReference(?string $value)
  {
    $this->_userReference = $value;
    return $this;
  }

  /**
   * Your reference for the user (if visitor actions have been triggered before with this ID before, the visitor ID property is not required, and can be looked up by this id.
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getUserReference($default = null, $trim = true)
  {
    $value = $this->_userReference ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setActionKey(?string $value)
  {
    $this->_actionKey = $value;
    return $this;
  }

  /**
   * (required) Marketing Action to trigger e.g. acquisition, lead
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getActionKey($default = null, $trim = true)
  {
    $value = $this->_actionKey ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCampaignHash(?string $value)
  {
    $this->_campaignHash = $value;
    return $this;
  }

  /**
   * Campaign hash to allocate this action to (leave blank to use visitor ID values)
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCampaignHash($default = null, $trim = true)
  {
    $value = $this->_campaignHash ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSid1(?string $value)
  {
    $this->_sid1 = $value;
    return $this;
  }

  /**
   * Sub Tracking ID 1 (leave blank to use visitor ID values)
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSid1($default = null, $trim = true)
  {
    $value = $this->_sid1 ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSid2(?string $value)
  {
    $this->_sid2 = $value;
    return $this;
  }

  /**
   * Sub Tracking ID 2 (leave blank to use visitor ID values)
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSid2($default = null, $trim = true)
  {
    $value = $this->_sid2 ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSid3(?string $value)
  {
    $this->_sid3 = $value;
    return $this;
  }

  /**
   * Sub Tracking ID 3 (leave blank to use visitor ID values)
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSid3($default = null, $trim = true)
  {
    $value = $this->_sid3 ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
