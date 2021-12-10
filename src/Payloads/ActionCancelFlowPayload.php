<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class ActionCancelFlowPayload
  extends ActionableCancelFlowPayload
  implements \JsonSerializable
{
  protected $_decisionKey;

  public function hydrate($data)
  {
    $data = (array)$data;
    parent::hydrate($data);
    if(isset($data["decisionKey"]))
    {
      $this->_decisionKey = (string)$data["decisionKey"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "decisionKey" => $this->_decisionKey,
      ]
    );
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setDecisionKey(?string $value)
  {
    $this->_decisionKey = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDecisionKey($default = null, $trim = true)
  {
    $value = $this->_decisionKey ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
