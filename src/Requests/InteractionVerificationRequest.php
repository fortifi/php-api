<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class InteractionVerificationRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "key" => $this->getKey(),
      "question" => $this->getQuestion(),
      "authenticationFid" => $this->getAuthenticationFid(),
      "interactionTypes" => $this->getInteractionTypes(),
      "isBuiltIn" => $this->getIsBuiltIn(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getKey($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'key', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getQuestion($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'question', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAuthenticationFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'authenticationFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return InteractionTypeRequest[]
   */
  public function getInteractionTypes($default = [])
  {
    return Objects::property($this->_getResultJson(), 'interactionTypes', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getIsBuiltIn($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'isBuiltIn', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->interactionTypes))
    {
      foreach($return->interactionTypes as $itmKey => $itm)
      {
        $return->interactionTypes[$itmKey] = (new InteractionTypeRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
