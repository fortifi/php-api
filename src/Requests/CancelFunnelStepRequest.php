<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class CancelFunnelStepRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "key" => $this->getKey(),
      "question" => $this->getQuestion(),
      "description" => $this->getDescription(),
      "configuration" => $this->getConfiguration(),
    ];
  }

  /**
   * Unique step key
   * 
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
   * Question to ask
   * 
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
   * More information to display regarding the question
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDescription($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'description', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * any configuration to maintain within this step (json)
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getConfiguration($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'configuration', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
