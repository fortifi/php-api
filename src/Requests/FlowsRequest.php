<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class FlowsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "flows" => $this->getFlows(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return FlowRequest[]
   */
  public function getFlows($default = [])
  {
    return Objects::property($this->_getResultJson(), 'flows', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->flows))
    {
      foreach($return->flows as $itmKey => $itm)
      {
        $return->flows[$itmKey] = (new FlowRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
