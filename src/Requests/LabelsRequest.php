<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class LabelsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "labels" => $this->getLabels(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return LabelRequest[]
   */
  public function getLabels($default = [])
  {
    return Objects::property($this->_getResultJson(), 'labels', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->labels))
    {
      foreach($return->labels as $itmKey => $itm)
      {
        $return->labels[$itmKey] = (new LabelRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
