<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ReasonGroupsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "reasonGroups" => $this->getReasonGroups(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return ReasonGroupRequest[]
   */
  public function getReasonGroups($default = [])
  {
    return Objects::property($this->_getResultJson(), 'reasonGroups', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->reasonGroups))
    {
      foreach($return->reasonGroups as $itmKey => $itm)
      {
        $return->reasonGroups[$itemKey] = (new ReasonGroupRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
