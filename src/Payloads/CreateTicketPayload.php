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
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "customerEmail"   => $this->_customerEmail,
      "customerName"    => $this->_customerName,
      "customerFid"     => $this->_customerFid,
      "ticketType"      => $this->_ticketType,
      "brandFid"        => $this->_brandFid,
      "queueFid"        => $this->_queueFid,
      "departmentFid"   => $this->_departmentFid,
      "departmentEmail" => $this->_departmentEmail,
      "departmentName"  => $this->_departmentName,
      "subject"         => $this->_subject,
      "textBody"        => $this->_textBody,
      "htmlBody"        => $this->_htmlBody,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCustomerEmail($value)
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
  public function setCustomerName($value)
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
  public function setCustomerFid($value)
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
  public function setTicketType($value)
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
  public function setBrandFid($value)
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
  public function setQueueFid($value)
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
  public function setDepartmentFid($value)
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
  public function setDepartmentEmail($value)
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
  public function setDepartmentName($value)
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
  public function setSubject($value)
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
  public function setTextBody($value)
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
  public function setHtmlBody($value)
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
}
