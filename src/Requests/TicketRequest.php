<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class TicketRequest
  extends EntityRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "hash" => $this->getHash(),
        "customerFid" => $this->getCustomerFid(),
        "companyFid" => $this->getCompanyFid(),
        "departmentFid" => $this->getDepartmentFid(),
        "queueFid" => $this->getQueueFid(),
        "agentFid" => $this->getAgentFid(),
        "slaFid" => $this->getSlaFid(),
        "ticketType" => $this->getTicketType(),
        "status" => $this->getStatus(),
        "impact" => $this->getImpact(),
        "urgency" => $this->getUrgency(),
        "priority" => $this->getPriority(),
        "tier" => $this->getTier(),
        "outboundEmail" => $this->getOutboundEmail(),
        "outboundName" => $this->getOutboundName(),
        "inboundEmail" => $this->getInboundEmail(),
        "inboundName" => $this->getInboundName(),
        "isSpam" => $this->isSpam(),
        "responseTargetTime" => $this->getResponseTargetTime(),
        "resolveTargetTime" => $this->getResolveTargetTime(),
        "postCount" => $this->getPostCount(),
        "lastReplySentTime" => $this->getLastReplySentTime(),
        "lastReplyReceivedTime" => $this->getLastReplyReceivedTime(),
        "priorityAdjustment" => $this->getPriorityAdjustment(),
        "locked" => $this->isLocked(),
        "lockedByFid" => $this->getLockedByFid(),
        "attachments" => $this->getAttachments(),
        "restrictedAccess" => $this->isRestrictedAccess(),
        "cc" => $this->getCc(),
        "bcc" => $this->getBcc(),
        "language" => $this->getLanguage(),
        "dateCreated" => $this->getDateCreated(),
        "dateModified" => $this->getDateModified(),
        "attachmentUrls" => $this->getAttachmentUrls(),
      ]
    );
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getHash($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'hash', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCustomerFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'customerFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCompanyFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'companyFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDepartmentFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'departmentFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getQueueFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'queueFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAgentFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'agentFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSlaFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'slaFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTicketType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'ticketType', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getStatus($default = null)
  {
    return Objects::property($this->_getResultJson(), 'status', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getImpact($default = null)
  {
    return Objects::property($this->_getResultJson(), 'impact', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getUrgency($default = null)
  {
    return Objects::property($this->_getResultJson(), 'urgency', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getPriority($default = null)
  {
    return Objects::property($this->_getResultJson(), 'priority', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getTier($default = null)
  {
    return Objects::property($this->_getResultJson(), 'tier', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getOutboundEmail($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'outboundEmail', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getOutboundName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'outboundName', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getInboundEmail($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'inboundEmail', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getInboundName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'inboundName', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isSpam($default = false)
  {
    return Objects::property($this->_getResultJson(), 'isSpam', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getResponseTargetTime($default = null)
  {
    return Objects::property($this->_getResultJson(), 'responseTargetTime', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getResolveTargetTime($default = null)
  {
    return Objects::property($this->_getResultJson(), 'resolveTargetTime', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getPostCount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'postCount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getLastReplySentTime($default = null)
  {
    return Objects::property($this->_getResultJson(), 'lastReplySentTime', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getLastReplyReceivedTime($default = null)
  {
    return Objects::property($this->_getResultJson(), 'lastReplyReceivedTime', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getPriorityAdjustment($default = null)
  {
    return Objects::property($this->_getResultJson(), 'priorityAdjustment', $default);
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isLocked($default = false)
  {
    return Objects::property($this->_getResultJson(), 'locked', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getLockedByFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'lockedByFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getAttachments($default = null)
  {
    return Objects::property($this->_getResultJson(), 'attachments', $default);
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isRestrictedAccess($default = false)
  {
    return Objects::property($this->_getResultJson(), 'restrictedAccess', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCc($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'cc', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getBcc($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'bcc', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getLanguage($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'language', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getDateCreated($default = null)
  {
    return Objects::property($this->_getResultJson(), 'dateCreated', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getDateModified($default = null)
  {
    return Objects::property($this->_getResultJson(), 'dateModified', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string[]
   */
  public function getAttachmentUrls($default = [])
  {
    return Objects::property($this->_getResultJson(), 'attachmentUrls', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);


    return $return;
  }
}
