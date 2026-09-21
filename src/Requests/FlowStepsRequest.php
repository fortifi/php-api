<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class FlowStepsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "flowFid" => $this->getFlowFid(),
      "steps" => $this->getSteps(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getFlowFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'flowFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return FlowStepRequest[]
   */
  public function getSteps($default = [])
  {
    return Objects::property($this->_getResultJson(), 'steps', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->steps))
    {
      foreach($return->steps as $itmKey => $itm)
      {
        $return->steps[$itmKey] = (new FlowStepRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
