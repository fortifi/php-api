<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PhonesRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "phones" => $this->getPhones(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return PhoneRequest[]
   */
  public function getPhones($default = [])
  {
    return Objects::property($this->_getResultJson(), 'phones', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->phones))
    {
      foreach($return->phones as $itmKey => $itm)
      {
        $return->phones[$itmKey] = (new PhoneRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
