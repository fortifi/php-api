<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class CreatePresetChatSessionPayload
  implements \JsonSerializable
{
  protected $_ticketFid;
  protected $_name;
  protected $_email;
  protected $_companyFid;
  protected $_customerFid;
  protected $_departmentFid;
  protected $_queueFid;
  protected $_impact;
  protected $_urgency;
  protected $_language;
  protected $_topic;
  protected $_domain;
  protected $_labels;
  protected $_notes;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["ticketFid"]))
    {
      $this->_ticketFid = (string)$data["ticketFid"];
    }
    if(isset($data["name"]))
    {
      $this->_name = (string)$data["name"];
    }
    if(isset($data["email"]))
    {
      $this->_email = (string)$data["email"];
    }
    if(isset($data["companyFid"]))
    {
      $this->_companyFid = (string)$data["companyFid"];
    }
    if(isset($data["customerFid"]))
    {
      $this->_customerFid = (string)$data["customerFid"];
    }
    if(isset($data["departmentFid"]))
    {
      $this->_departmentFid = (string)$data["departmentFid"];
    }
    if(isset($data["queueFid"]))
    {
      $this->_queueFid = (string)$data["queueFid"];
    }
    if(isset($data["impact"]))
    {
      $this->_impact = (string)$data["impact"];
    }
    if(isset($data["urgency"]))
    {
      $this->_urgency = (string)$data["urgency"];
    }
    if(isset($data["language"]))
    {
      $this->_language = (string)$data["language"];
    }
    if(isset($data["topic"]))
    {
      $this->_topic = (string)$data["topic"];
    }
    if(isset($data["domain"]))
    {
      $this->_domain = (string)$data["domain"];
    }
    if(isset($data["labels"]))
    {
      $this->_labels = [];
      foreach($data["labels"] as $dItem)
      {
        $dObj = new KeyValuePayload();
        $dObj->hydrate($dItem);
        $this->_labels[] = $dObj;
      }
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
    return [
      "ticketFid"     => $this->_ticketFid,
      "name"          => $this->_name,
      "email"         => $this->_email,
      "companyFid"    => $this->_companyFid,
      "customerFid"   => $this->_customerFid,
      "departmentFid" => $this->_departmentFid,
      "queueFid"      => $this->_queueFid,
      "impact"        => $this->_impact,
      "urgency"       => $this->_urgency,
      "language"      => $this->_language,
      "topic"         => $this->_topic,
      "domain"        => $this->_domain,
      "labels"        => $this->_labels,
      "notes"         => $this->_notes,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setTicketFid(?string $value)
  {
    $this->_ticketFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTicketFid($default = null, $trim = true)
  {
    $value = $this->_ticketFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setName(?string $value)
  {
    $this->_name = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getName($default = null, $trim = true)
  {
    $value = $this->_name ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setEmail(?string $value)
  {
    $this->_email = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getEmail($default = null, $trim = true)
  {
    $value = $this->_email ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCompanyFid(?string $value)
  {
    $this->_companyFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCompanyFid($default = null, $trim = true)
  {
    $value = $this->_companyFid ?: $default;
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

  /**
   * @param string $value
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
  public function setDomain(?string $value)
  {
    $this->_domain = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDomain($default = null, $trim = true)
  {
    $value = $this->_domain ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param KeyValuePayload[] $value
   *
   * @return $this
   */
  public function setLabels(?array $value)
  {
    $this->_labels = $value;
    return $this;
  }

  /**
   * @param KeyValuePayload $item
   *
   * @return $this
   */
  public function addLabel(KeyValuePayload $item)
  {
    $this->_labels[] = $item;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return KeyValuePayload[]
   */
  public function getLabels($default = [])
  {
    return $this->_labels ?: $default;
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
