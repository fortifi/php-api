<?php
namespace Fortifi\Api\V1\Payloads;

class RetentionFlowOptionsPayload
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
        $dObj = new RetentionFlowOptionPayload();
        $dObj->hydrate($dItem);
        $this->_options[] = $dObj;
      }
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "options" => $this->_options,
    ];
  }

  /**
   * @param RetentionFlowOptionPayload[] $value
   *
   * @return $this
   */
  public function setOptions(?array $value)
  {
    $this->_options = $value;
    return $this;
  }

  /**
   * @param RetentionFlowOptionPayload $item
   *
   * @return $this
   */
  public function addOption(RetentionFlowOptionPayload $item)
  {
    $this->_options[] = $item;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return RetentionFlowOptionPayload[]
   */
  public function getOptions($default = [])
  {
    return $this->_options ?: $default;
  }
}
