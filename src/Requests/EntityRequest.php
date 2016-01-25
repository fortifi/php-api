<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;

class EntityRequest
  extends FidRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "displayName" => $this->getDisplayName(),
        "description" => $this->getDescription(),
      ]
    );
  }

  /**
   * Display Name
   * 
   * @param mixed $default
   *
   * @return string
   */
  public function getDisplayName($default = null)
  {
    return Objects::property($this->_getResultJson(), 'displayName', $default);
  }

  /**
   * Discription
   * 
   * @param mixed $default
   *
   * @return string
   */
  public function getDescription($default = null)
  {
    return Objects::property($this->_getResultJson(), 'description', $default);
  }
}
