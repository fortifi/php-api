<?php
namespace Fortifi\Api\V1\Payloads;

class ReservationPayload
  implements \JsonSerializable
{
  /**
   * Time in seconds to hold this reservation for
   */
  protected $_duration;
  /**
   * Related Fids
   */
  protected $_relatedFids;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["duration"]))
    {
      $this->_duration = (int)$data["duration"];
    }
    if(isset($data["relatedFids"]))
    {
      $this->_relatedFids = $data["relatedFids"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "duration"    => $this->_duration,
      "relatedFids" => $this->_relatedFids,
    ];
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setDuration(?int $value)
  {
    $this->_duration = $value;
    return $this;
  }

  /**
   * Time in seconds to hold this reservation for
   *
   * @param mixed $default
   *
   * @return integer
   */
  public function getDuration($default = null)
  {
    return $this->_duration ?: $default;
  }

  /**
   * @param string[] $value
   *
   * @return $this
   */
  public function setRelatedFids(?array $value)
  {
    $this->_relatedFids = $value;
    return $this;
  }

  /**
   * @param string $item
   *
   * @return $this
   */
  public function addRelatedFid(string $item)
  {
    $this->_relatedFids[] = $item;
    return $this;
  }

  /**
   * Related Fids
   *
   * @param mixed $default
   *
   * @return string[]
   */
  public function getRelatedFids($default = [])
  {
    return $this->_relatedFids ?: $default;
  }
}
