<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class RetentionFlowOptionsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "options" => $this->getOptions(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return RetentionFlowOptionRequest[]
   */
  public function getOptions($default = [])
  {
    return Objects::property($this->_getResultJson(), 'options', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->options))
    {
      foreach($return->options as $itmKey => $itm)
      {
        $return->options[$itmKey] = (new RetentionFlowOptionRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
