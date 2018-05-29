<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class AddressesRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "addresses" => $this->getAddresses(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return AddressRequest[]
   */
  public function getAddresses($default = [])
  {
    return Objects::property($this->_getResultJson(), 'addresses', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->addresses))
    {
      foreach($return->addresses as $itmKey => $itm)
      {
        $return->addresses[$itmKey] = (new AddressRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
