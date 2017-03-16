<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class TicketRequest
  extends EntityRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "timestamp" => $this->getTimestamp(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getTimestamp($default = null)
  {
    return Objects::property($this->_getResultJson(), 'timestamp', $default);
  }
}
