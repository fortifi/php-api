<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class CancelFlowOptionsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "options" => $this->getOptions(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return CancelFlowOptionRequest[]
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
        $return->options[$itmKey] = (new CancelFlowOptionRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
