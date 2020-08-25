<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PropertiesRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "values" => $this->getValues(),
      "flags" => $this->getFlags(),
      "counters" => $this->getCounters(),
    ];
  }

  /**
   * Value properties
   * 
   * @param mixed $default
   *
   * @return PropertyValueRequest[]
   */
  public function getValues($default = [])
  {
    return Objects::property($this->_getResultJson(), 'values', $default);
  }

  /**
   * Flag properties
   * 
   * @param mixed $default
   *
   * @return PropertyFlagRequest[]
   */
  public function getFlags($default = [])
  {
    return Objects::property($this->_getResultJson(), 'flags', $default);
  }

  /**
   * Counter properties
   * 
   * @param mixed $default
   *
   * @return PropertyCounterRequest[]
   */
  public function getCounters($default = [])
  {
    return Objects::property($this->_getResultJson(), 'counters', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->values))
    {
      foreach($return->values as $itmKey => $itm)
      {
        $return->values[$itmKey] = (new PropertyValueRequest())
          ->hydrate($itm);
      }
    }

    if(!empty($return->flags))
    {
      foreach($return->flags as $itmKey => $itm)
      {
        $return->flags[$itmKey] = (new PropertyFlagRequest())
          ->hydrate($itm);
      }
    }

    if(!empty($return->counters))
    {
      foreach($return->counters as $itmKey => $itm)
      {
        $return->counters[$itmKey] = (new PropertyCounterRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
