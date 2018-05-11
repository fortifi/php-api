<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class ServiceIncidentsPayload
  implements \JsonSerializable
{
  protected $_startDate;
  protected $_endDate;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["startDate"]))
    {
      $this->_startDate = (string)$data["startDate"];
    }
    if(isset($data["endDate"]))
    {
      $this->_endDate = (string)$data["endDate"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "startDate" => $this->_startDate,
      "endDate"   => $this->_endDate,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setStartDate($value)
  {
    $this->_startDate = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getStartDate($default = null, $trim = true)
  {
    $value = $this->_startDate ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setEndDate($value)
  {
    $this->_endDate = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getEndDate($default = null, $trim = true)
  {
    $value = $this->_endDate ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
