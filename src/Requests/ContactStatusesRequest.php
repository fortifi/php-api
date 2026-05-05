<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ContactStatusesRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "statuses" => $this->getStatuses(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return ContactStatusRequest[]
   */
  public function getStatuses($default = [])
  {
    return Objects::property($this->_getResultJson(), 'statuses', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->statuses))
    {
      foreach($return->statuses as $itmKey => $itm)
      {
        $return->statuses[$itmKey] = (new ContactStatusRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
