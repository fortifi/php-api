<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class RetentionFlowReasonsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "reasons" => $this->getReasons(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return RetentionFlowReasonRequest[]
   */
  public function getReasons($default = [])
  {
    return Objects::property($this->_getResultJson(), 'reasons', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->reasons))
    {
      foreach($return->reasons as $itmKey => $itm)
      {
        $return->reasons[$itmKey] = (new RetentionFlowReasonRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
