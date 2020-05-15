<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PeriodsRequest
  extends PaginationRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "periods" => $this->getPeriods(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return PeriodRequest[]
   */
  public function getPeriods($default = [])
  {
    return Objects::property($this->_getResultJson(), 'periods', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->periods))
    {
      foreach($return->periods as $itmKey => $itm)
      {
        $return->periods[$itmKey] = (new PeriodRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
