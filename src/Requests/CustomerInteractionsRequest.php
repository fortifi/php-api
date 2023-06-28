<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class CustomerInteractionsRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "chats" => $this->getChats(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return CustomerInteractionRequest[]
   */
  public function getChats($default = [])
  {
    return Objects::property($this->_getResultJson(), 'chats', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->chats))
    {
      foreach($return->chats as $itmKey => $itm)
      {
        $return->chats[$itmKey] = (new CustomerInteractionRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
