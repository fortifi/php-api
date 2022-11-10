<?php
namespace Fortifi\Api\V1\Payloads;

class CancelFlowOptionsPayload
  implements \JsonSerializable
{
  protected $_options;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["options"]))
    {
      $this->_options = [];
      foreach($data["options"] as $dItem)
      {
        $dObj = new CancelFlowOptionPayload();
        $dObj->hydrate($dItem);
        $this->_options[] = $dObj;
      }
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "options" => $this->_options,
    ];
  }

  /**
   * @param CancelFlowOptionPayload[] $value
   *
   * @return $this
   */
  public function setOptions(?array $value)
  {
    $this->_options = $value;
    return $this;
  }

  /**
   * @param CancelFlowOptionPayload $item
   *
   * @return $this
   */
  public function addOption(CancelFlowOptionPayload $item)
  {
    $this->_options[] = $item;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return CancelFlowOptionPayload[]
   */
  public function getOptions($default = [])
  {
    return $this->_options ?: $default;
  }
}
