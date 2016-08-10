<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class SubscriptionSummaryRequest
  extends EntityRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "lastRenewed" => $this->getLastRenewed(),
        "renewalDate" => $this->getRenewalDate(),
        "paidUntil" => $this->getPaidUntil(),
        "cycle" => $this->getCycle(),
        "renewalPrice" => $this->getRenewalPrice(),
        "status" => $this->getStatus(),
      ]
    );
  }

  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getLastRenewed($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'lastRenewed', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getRenewalDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'renewalDate', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPaidUntil($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'paidUntil', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCycle($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'cycle', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getRenewalPrice($default = null)
  {
    return Objects::property($this->_getResultJson(), 'renewalPrice', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getStatus($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'status', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
