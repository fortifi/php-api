<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ReasonsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "reasons" => $this->getReasons(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return ReasonRequest[]
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
      $tmp = [];
      foreach($return->reasons as $itm)
      {
        $tmp[] = (new ReasonRequest())
          ->hydrate($itm);
      }
      $return->reasons = $tmp;
    }

    return $return;
  }
}
