<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;

class AdvertiserPixelRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "url" => $this->getUrl(),
      "method" => $this->getMethod(),
      "content" => $this->getContent(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getUrl($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'url', $default);
    return $trim ? trim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getMethod($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'method', $default);
    return $trim ? trim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getContent($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'content', $default);
    return $trim ? trim($value) : $value;
  }
}
