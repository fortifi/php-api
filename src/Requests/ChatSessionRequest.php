<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ChatSessionRequest
  extends EntityRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "timeStarted" => $this->getTimeStarted(),
        "timeEnded" => $this->getTimeEnded(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getTimeStarted($default = null)
  {
    return Objects::property($this->_getResultJson(), 'timeStarted', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getTimeEnded($default = null)
  {
    return Objects::property($this->_getResultJson(), 'timeEnded', $default);
  }
}
