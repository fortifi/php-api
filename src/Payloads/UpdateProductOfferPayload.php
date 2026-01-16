<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class UpdateProductOfferPayload
  implements \JsonSerializable
{
  protected $_displayName;
  protected $_description;
  protected $_maxUsages;
  protected $_term;
  protected $_termType;
  protected $_apiOnly;
  protected $_applyFid;
  protected $_expiryDate;
  protected $_quantityLimit;
  protected $_restrictive = false;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["displayName"]))
    {
      $this->_displayName = (string)$data["displayName"];
    }
    if(isset($data["description"]))
    {
      $this->_description = (string)$data["description"];
    }
    if(isset($data["maxUsages"]))
    {
      $this->_maxUsages = (int)$data["maxUsages"];
    }
    if(isset($data["term"]))
    {
      $this->_term = (int)$data["term"];
    }
    if(isset($data["termType"]))
    {
      $this->_termType = (int)$data["termType"];
    }
    if(isset($data["apiOnly"]))
    {
      $this->_apiOnly = $data["apiOnly"];
    }
    if(isset($data["applyFid"]))
    {
      $this->_applyFid = (string)$data["applyFid"];
    }
    if(isset($data["expiryDate"]))
    {
      $this->_expiryDate = (string)$data["expiryDate"];
    }
    if(isset($data["quantityLimit"]))
    {
      $this->_quantityLimit = (int)$data["quantityLimit"];
    }
    if(isset($data["restrictive"]))
    {
      $this->_restrictive = $data["restrictive"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "displayName"   => $this->_displayName,
      "description"   => $this->_description,
      "maxUsages"     => $this->_maxUsages,
      "term"          => $this->_term,
      "termType"      => $this->_termType,
      "apiOnly"       => $this->_apiOnly,
      "applyFid"      => $this->_applyFid,
      "expiryDate"    => $this->_expiryDate,
      "quantityLimit" => $this->_quantityLimit,
      "restrictive"   => $this->_restrictive,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setDisplayName(?string $value)
  {
    $this->_displayName = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDisplayName($default = null, $trim = true)
  {
    $value = $this->_displayName ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setDescription(?string $value)
  {
    $this->_description = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDescription($default = null, $trim = true)
  {
    $value = $this->_description ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setMaxUsages(?int $value)
  {
    $this->_maxUsages = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getMaxUsages($default = null)
  {
    return $this->_maxUsages ?: $default;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setTerm(?int $value)
  {
    $this->_term = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getTerm($default = null)
  {
    return $this->_term ?: $default;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setTermType(?int $value)
  {
    $this->_termType = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getTermType($default = null)
  {
    return $this->_termType ?: $default;
  }

  /**
   * @param bool $value
   *
   * @return $this
   */
  public function setApiOnly(?bool $value)
  {
    $this->_apiOnly = $value;
    return $this;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isApiOnly($default = false)
  {
    return (bool)$this->_apiOnly ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setApplyFid(?string $value)
  {
    $this->_applyFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getApplyFid($default = null, $trim = true)
  {
    $value = $this->_applyFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setExpiryDate(?string $value)
  {
    $this->_expiryDate = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getExpiryDate($default = null, $trim = true)
  {
    $value = $this->_expiryDate ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setQuantityLimit(?int $value)
  {
    $this->_quantityLimit = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getQuantityLimit($default = null)
  {
    return $this->_quantityLimit ?: $default;
  }

  /**
   * @param bool $value
   *
   * @return $this
   */
  public function setRestrictive(?bool $value)
  {
    $this->_restrictive = $value;
    return $this;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isRestrictive($default = false)
  {
    return (bool)$this->_restrictive ?: $default;
  }
}
