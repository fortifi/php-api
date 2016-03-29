<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class SetCustomerLocationPayload
  implements \JsonSerializable
{
  /**
   * Continent
   */
  protected $_continent;
  /**
   * Country
   */
  protected $_country;
  /**
   * County
   */
  protected $_county;
  /**
   * City
   */
  protected $_city;
  /**
   * Postal
   */
  protected $_postal;
  /**
   * Timezone
   */
  protected $_timezone;
  /**
   * Client IP Address
   */
  protected $_clientIp;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["continent"]))
    {
      $this->_continent = $data["continent"];
    }
    if(isset($data["country"]))
    {
      $this->_country = $data["country"];
    }
    if(isset($data["county"]))
    {
      $this->_county = $data["county"];
    }
    if(isset($data["city"]))
    {
      $this->_city = $data["city"];
    }
    if(isset($data["postal"]))
    {
      $this->_postal = $data["postal"];
    }
    if(isset($data["timezone"]))
    {
      $this->_timezone = $data["timezone"];
    }
    if(isset($data["clientIp"]))
    {
      $this->_clientIp = $data["clientIp"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "continent" => $this->_continent,
      "country"   => $this->_country,
      "county"    => $this->_county,
      "city"      => $this->_city,
      "postal"    => $this->_postal,
      "timezone"  => $this->_timezone,
      "clientIp"  => $this->_clientIp,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setContinent($value)
  {
    $this->_continent = $value;
    return $this;
  }

  /**
   * Continent
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getContinent($default = null, $trim = true)
  {
    $value = $this->_continent ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCountry($value)
  {
    $this->_country = $value;
    return $this;
  }

  /**
   * Country
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCountry($default = null, $trim = true)
  {
    $value = $this->_country ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCounty($value)
  {
    $this->_county = $value;
    return $this;
  }

  /**
   * County
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCounty($default = null, $trim = true)
  {
    $value = $this->_county ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCity($value)
  {
    $this->_city = $value;
    return $this;
  }

  /**
   * City
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCity($default = null, $trim = true)
  {
    $value = $this->_city ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPostal($value)
  {
    $this->_postal = $value;
    return $this;
  }

  /**
   * Postal
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPostal($default = null, $trim = true)
  {
    $value = $this->_postal ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setTimezone($value)
  {
    $this->_timezone = $value;
    return $this;
  }

  /**
   * Timezone
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTimezone($default = null, $trim = true)
  {
    $value = $this->_timezone ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
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
   * Client IP Address
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getClientIp($default = null, $trim = true)
  {
    $value = $this->_clientIp ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}