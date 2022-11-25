<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class CreateTicketPayload
  implements \JsonSerializable
{
  protected $_customerEmail;
  protected $_customerName;
  protected $_customerFid;
  protected $_ticketType;
  protected $_brandFid;
  protected $_queueFid;
  protected $_departmentFid;
  protected $_departmentEmail;
  protected $_departmentName;
  protected $_subject;
  protected $_textBody;
  protected $_htmlBody;
  protected $_impact;
  protected $_urgency;
  protected $_attachments;
  protected $_language;
  protected $_accountVerificationFid;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["customerEmail"]))
    {
      $this->_customerEmail = (string)$data["customerEmail"];
    }
    if(isset($data["customerName"]))
    {
      $this->_customerName = (string)$data["customerName"];
    }
    if(isset($data["customerFid"]))
    {
      $this->_customerFid = (string)$data["customerFid"];
    }
    if(isset($data["ticketType"]))
    {
      $this->_ticketType = (string)$data["ticketType"];
    }
    if(isset($data["brandFid"]))
    {
      $this->_brandFid = (string)$data["brandFid"];
    }
    if(isset($data["queueFid"]))
    {
      $this->_queueFid = (string)$data["queueFid"];
    }
    if(isset($data["departmentFid"]))
    {
      $this->_departmentFid = (string)$data["departmentFid"];
    }
    if(isset($data["departmentEmail"]))
    {
      $this->_departmentEmail = (string)$data["departmentEmail"];
    }
    if(isset($data["departmentName"]))
    {
      $this->_departmentName = (string)$data["departmentName"];
    }
    if(isset($data["subject"]))
    {
      $this->_subject = (string)$data["subject"];
    }
    if(isset($data["textBody"]))
    {
      $this->_textBody = (string)$data["textBody"];
    }
    if(isset($data["htmlBody"]))
    {
      $this->_htmlBody = (string)$data["htmlBody"];
    }
    if(isset($data["impact"]))
    {
      $this->_impact = (string)$data["impact"];
    }
    if(isset($data["urgency"]))
    {
      $this->_urgency = (string)$data["urgency"];
    }
    if(isset($data["attachments"]))
    {
      $this->_attachments = $data["attachments"];
    }
    if(isset($data["language"]))
    {
      $this->_language = (string)$data["language"];
    }
    if(isset($data["accountVerificationFid"]))
    {
      $this->_accountVerificationFid = (string)$data["accountVerificationFid"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "customerEmail"          => $this->_customerEmail,
      "customerName"           => $this->_customerName,
      "customerFid"            => $this->_customerFid,
      "ticketType"             => $this->_ticketType,
      "brandFid"               => $this->_brandFid,
      "queueFid"               => $this->_queueFid,
      "departmentFid"          => $this->_departmentFid,
      "departmentEmail"        => $this->_departmentEmail,
      "departmentName"         => $this->_departmentName,
      "subject"                => $this->_subject,
      "textBody"               => $this->_textBody,
      "htmlBody"               => $this->_htmlBody,
      "impact"                 => $this->_impact,
      "urgency"                => $this->_urgency,
      "attachments"            => $this->_attachments,
      "language"               => $this->_language,
      "accountVerificationFid" => $this->_accountVerificationFid,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCustomerEmail(?string $value)
  {
    $this->_customerEmail = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCustomerEmail($default = null, $trim = true)
  {
    $value = $this->_customerEmail ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCustomerName(?string $value)
  {
    $this->_customerName = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCustomerName($default = null, $trim = true)
  {
    $value = $this->_customerName ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCustomerFid(?string $value)
  {
    $this->_customerFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCustomerFid($default = null, $trim = true)
  {
    $value = $this->_customerFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  const TICKET_TYPE_GENERIC = 'generic';
  const TICKET_TYPE_QUESTION = 'question';
  const TICKET_TYPE_PROBLEM = 'problem';
  const TICKET_TYPE_INCIDENT = 'incident';

  /**
   * @param string $value generic, question, problem, incident
   *
   * @return $this
   */
  public function setTicketType(?string $value)
  {
    $this->_ticketType = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTicketType($default = null, $trim = true)
  {
    $value = $this->_ticketType ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setBrandFid(?string $value)
  {
    $this->_brandFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getBrandFid($default = null, $trim = true)
  {
    $value = $this->_brandFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setQueueFid(?string $value)
  {
    $this->_queueFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getQueueFid($default = null, $trim = true)
  {
    $value = $this->_queueFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setDepartmentFid(?string $value)
  {
    $this->_departmentFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDepartmentFid($default = null, $trim = true)
  {
    $value = $this->_departmentFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setDepartmentEmail(?string $value)
  {
    $this->_departmentEmail = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDepartmentEmail($default = null, $trim = true)
  {
    $value = $this->_departmentEmail ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setDepartmentName(?string $value)
  {
    $this->_departmentName = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDepartmentName($default = null, $trim = true)
  {
    $value = $this->_departmentName ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSubject(?string $value)
  {
    $this->_subject = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSubject($default = null, $trim = true)
  {
    $value = $this->_subject ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setTextBody(?string $value)
  {
    $this->_textBody = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTextBody($default = null, $trim = true)
  {
    $value = $this->_textBody ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setHtmlBody(?string $value)
  {
    $this->_htmlBody = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getHtmlBody($default = null, $trim = true)
  {
    $value = $this->_htmlBody ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  const IMPACT_NONE = 'none';
  const IMPACT_MINOR = 'minor';
  const IMPACT_MODERATE = 'moderate';
  const IMPACT_SIGNIFICANT = 'significant';
  const IMPACT_EXTENSIVE = 'extensive';

  /**
   * @param string $value none, minor, moderate, significant, extensive
   *
   * @return $this
   */
  public function setImpact(?string $value)
  {
    $this->_impact = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getImpact($default = null, $trim = true)
  {
    $value = $this->_impact ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  const URGENCY_TRIAGE = 'triage';
  const URGENCY_LOW = 'low';
  const URGENCY_NORMAL = 'normal';
  const URGENCY_HIGH = 'high';
  const URGENCY_URGENT = 'urgent';
  const URGENCY_EMERGENCY = 'emergency';
  const URGENCY_CRITICAL = 'critical';

  /**
   * @param string $value triage, low, normal, high, urgent, emergency, critical
   *
   * @return $this
   */
  public function setUrgency(?string $value)
  {
    $this->_urgency = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getUrgency($default = null, $trim = true)
  {
    $value = $this->_urgency ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string[] $value
   *
   * @return $this
   */
  public function setAttachments(?array $value)
  {
    $this->_attachments = $value;
    return $this;
  }

  /**
   * @param string $item
   *
   * @return $this
   */
  public function addAttachment(string $item)
  {
    $this->_attachments[] = $item;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return string[]
   */
  public function getAttachments($default = [])
  {
    return $this->_attachments ?: $default;
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
   * @param string $value
   *
   * @return $this
   */
  public function setAccountVerificationFid(?string $value)
  {
    $this->_accountVerificationFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAccountVerificationFid($default = null, $trim = true)
  {
    $value = $this->_accountVerificationFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
