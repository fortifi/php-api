<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class InteractionMessagesRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "messages" => $this->getMessages(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return InteractionMessageRequest[]
   */
  public function getMessages($default = [])
  {
    return Objects::property($this->_getResultJson(), 'messages', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->messages))
    {
      foreach($return->messages as $itmKey => $itm)
      {
        $return->messages[$itmKey] = (new InteractionMessageRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
