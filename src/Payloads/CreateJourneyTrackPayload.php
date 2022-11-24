<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class CreateJourneyTrackPayload
  implements \JsonSerializable
{
  protected $_dataNodeFid;
  protected $_data;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["dataNodeFid"]))
    {
      $this->_dataNodeFid = (string)$data["dataNodeFid"];
    }
    if(isset($data["data"]))
    {
      $this->_data = $data["data"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "dataNodeFid" => $this->_dataNodeFid,
      "data"        => $this->_data,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setDataNodeFid(?string $value)
  {
    $this->_dataNodeFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDataNodeFid($default = null, $trim = true)
  {
    $value = $this->_dataNodeFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param object[] $value
   *
   * @return $this
   */
  public function setData(?array $value)
  {
    $this->_data = $value;
    return $this;
  }

  /**
   * @param object $item
   *
   * @return $this
   */
  public function addDatum(object $item)
  {
    $this->_data[] = $item;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return object[]
   */
  public function getData($default = [])
  {
    return $this->_data ?: $default;
  }
}
