<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ChatSessionsRequest
  extends PaginationRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "chatSessions" => $this->getChatSessions(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return ChatSessionRequest[]
   */
  public function getChatSessions($default = [])
  {
    return Objects::property($this->_getResultJson(), 'chatSessions', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->chatSessions))
    {
      foreach($return->chatSessions as $itmKey => $itm)
      {
        $return->chatSessions[$itmKey] = (new ChatSessionRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
