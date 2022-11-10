<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class EmailRequest
  extends EntityRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "email" => $this->getEmail(),
        "messageGroups" => $this->getMessageGroups(),
      ]
    );
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getEmail($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'email', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return MessageGroupsRequest
   */
  public function getMessageGroups($default = null)
  {
    return Objects::property($this->_getResultJson(), 'messageGroups', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->messageGroups))
    {
      $return->messageGroups = (new MessageGroupsRequest())
        ->hydrate($return->messageGroups);
    }

    return $return;
  }
}
