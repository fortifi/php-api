<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class OrderProductPayload
  implements \JsonSerializable
{
  /**
   * Product Parent FID or reference
   */
  protected $_parent;
  /**
   * Reference for use with parent field
   */
  protected $_transportReference;
  /**
   * Product Price FID
   */
  protected $_priceFid;
  /**
   * Offer FID to apply to product
   */
  protected $_offerFid;
  /**
   * Product SKU
   */
  protected $_sku;
  /**
   * Product Fid
   */
  protected $_productFid;
  /**
   * Cycle Term
   */
  protected $_cycleTerm;
  /**
   * Term Type
   */
  protected $_cycleType;
  /**
   * Interval in ISO 8601 standard
   */
  protected $_cycle;
  /**
   * Custom initial term start date (Time in ISO 8601 standard e.g 2015-12-05T13:11:59Z)
   */
  protected $_initialTermStartDate;
  /**
   * Custom initial term end date (Time in ISO 8601 standard e.g 2015-12-05T13:11:59Z)
   */
  protected $_initialTermEndDate;
  protected $_quantity;
  protected $_displayName;
  protected $_identity;
  protected $_reservationApp;
  protected $_reservationKey;
  protected $_properties;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["parent"]))
    {
      $this->_parent = (string)$data["parent"];
    }
    if(isset($data["transportReference"]))
    {
      $this->_transportReference = (string)$data["transportReference"];
    }
    if(isset($data["priceFid"]))
    {
      $this->_priceFid = (string)$data["priceFid"];
    }
    if(isset($data["offerFid"]))
    {
      $this->_offerFid = (string)$data["offerFid"];
    }
    if(isset($data["sku"]))
    {
      $this->_sku = (string)$data["sku"];
    }
    if(isset($data["productFid"]))
    {
      $this->_productFid = (string)$data["productFid"];
    }
    if(isset($data["cycleTerm"]))
    {
      $this->_cycleTerm = (int)$data["cycleTerm"];
    }
    if(isset($data["cycleType"]))
    {
      $this->_cycleType = (string)$data["cycleType"];
    }
    if(isset($data["cycle"]))
    {
      $this->_cycle = (string)$data["cycle"];
    }
    if(isset($data["initialTermStartDate"]))
    {
      $this->_initialTermStartDate = (string)$data["initialTermStartDate"];
    }
    if(isset($data["initialTermEndDate"]))
    {
      $this->_initialTermEndDate = (string)$data["initialTermEndDate"];
    }
    if(isset($data["quantity"]))
    {
      $this->_quantity = (int)$data["quantity"];
    }
    if(isset($data["displayName"]))
    {
      $this->_displayName = (string)$data["displayName"];
    }
    if(isset($data["identity"]))
    {
      $this->_identity = (string)$data["identity"];
    }
    if(isset($data["reservationApp"]))
    {
      $this->_reservationApp = (string)$data["reservationApp"];
    }
    if(isset($data["reservationKey"]))
    {
      $this->_reservationKey = (string)$data["reservationKey"];
    }
    if(isset($data["properties"]))
    {
      $this->_properties = new PropertyBulkSetPayload();
      $this->_properties->hydrate($data["properties"]);
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "parent"               => $this->_parent,
      "transportReference"   => $this->_transportReference,
      "priceFid"             => $this->_priceFid,
      "offerFid"             => $this->_offerFid,
      "sku"                  => $this->_sku,
      "productFid"           => $this->_productFid,
      "cycleTerm"            => $this->_cycleTerm,
      "cycleType"            => $this->_cycleType,
      "cycle"                => $this->_cycle,
      "initialTermStartDate" => $this->_initialTermStartDate,
      "initialTermEndDate"   => $this->_initialTermEndDate,
      "quantity"             => $this->_quantity,
      "displayName"          => $this->_displayName,
      "identity"             => $this->_identity,
      "reservationApp"       => $this->_reservationApp,
      "reservationKey"       => $this->_reservationKey,
      "properties"           => $this->_properties,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setParent(?string $value)
  {
    $this->_parent = $value;
    return $this;
  }

  /**
   * Product Parent FID or reference
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getParent($default = null, $trim = true)
  {
    $value = $this->_parent ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setTransportReference(?string $value)
  {
    $this->_transportReference = $value;
    return $this;
  }

  /**
   * Reference for use with parent field
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTransportReference($default = null, $trim = true)
  {
    $value = $this->_transportReference ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPriceFid(?string $value)
  {
    $this->_priceFid = $value;
    return $this;
  }

  /**
   * Product Price FID
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPriceFid($default = null, $trim = true)
  {
    $value = $this->_priceFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setOfferFid(?string $value)
  {
    $this->_offerFid = $value;
    return $this;
  }

  /**
   * Offer FID to apply to product
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getOfferFid($default = null, $trim = true)
  {
    $value = $this->_offerFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSku(?string $value)
  {
    $this->_sku = $value;
    return $this;
  }

  /**
   * Product SKU
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSku($default = null, $trim = true)
  {
    $value = $this->_sku ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setProductFid(?string $value)
  {
    $this->_productFid = $value;
    return $this;
  }

  /**
   * Product Fid
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getProductFid($default = null, $trim = true)
  {
    $value = $this->_productFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setCycleTerm(?int $value)
  {
    $this->_cycleTerm = $value;
    return $this;
  }

  /**
   * Cycle Term
   *
   * @param mixed $default
   *
   * @return integer
   */
  public function getCycleTerm($default = null)
  {
    return $this->_cycleTerm ?: $default;
  }

  const CYCLE_TYPE_ONETIME = 'onetime';
  const CYCLE_TYPE_LIFETIME = 'lifetime';
  const CYCLE_TYPE_DAY = 'day';
  const CYCLE_TYPE_WEEK = 'week';
  const CYCLE_TYPE_MONTH = 'month';
  const CYCLE_TYPE_YEAR = 'year';

  /**
   * @param string $value onetime, lifetime, day, week, month, year
   *
   * @return $this
   */
  public function setCycleType(?string $value)
  {
    $this->_cycleType = $value;
    return $this;
  }

  /**
   * Term Type
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCycleType($default = null, $trim = true)
  {
    $value = $this->_cycleType ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCycle(?string $value)
  {
    $this->_cycle = $value;
    return $this;
  }

  /**
   * Interval in ISO 8601 standard
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCycle($default = null, $trim = true)
  {
    $value = $this->_cycle ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setInitialTermStartDate(?string $value)
  {
    $this->_initialTermStartDate = $value;
    return $this;
  }

  /**
   * Custom initial term start date (Time in ISO 8601 standard e.g 2015-12-05T13:11:59Z)
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getInitialTermStartDate($default = null, $trim = true)
  {
    $value = $this->_initialTermStartDate ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setInitialTermEndDate(?string $value)
  {
    $this->_initialTermEndDate = $value;
    return $this;
  }

  /**
   * Custom initial term end date (Time in ISO 8601 standard e.g 2015-12-05T13:11:59Z)
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getInitialTermEndDate($default = null, $trim = true)
  {
    $value = $this->_initialTermEndDate ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setQuantity(?int $value)
  {
    $this->_quantity = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getQuantity($default = null)
  {
    return $this->_quantity ?: $default;
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
  public function setIdentity(?string $value)
  {
    $this->_identity = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getIdentity($default = null, $trim = true)
  {
    $value = $this->_identity ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setReservationApp(?string $value)
  {
    $this->_reservationApp = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getReservationApp($default = null, $trim = true)
  {
    $value = $this->_reservationApp ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setReservationKey(?string $value)
  {
    $this->_reservationKey = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getReservationKey($default = null, $trim = true)
  {
    $value = $this->_reservationKey ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param PropertyBulkSetPayload $value
   *
   * @return $this
   */
  public function setProperties(?PropertyBulkSetPayload $value)
  {
    $this->_properties = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return PropertyBulkSetPayload
   */
  public function getProperties($default = null)
  {
    return $this->_properties ?: $default;
  }
}
