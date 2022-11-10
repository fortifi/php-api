<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class RetentionFlowStatesRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "items" => $this->getItems(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return RetentionFlowStateRequest[]
   */
  public function getItems($default = [])
  {
    return Objects::property($this->_getResultJson(), 'items', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->items))
    {
      foreach($return->items as $itmKey => $itm)
      {
        $return->items[$itmKey] = (new RetentionFlowStateRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
