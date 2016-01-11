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
   *
   * @return string
   */
  public function getUrl($default = null)
  {
    return Objects::property($this->_getResultJson(), 'url', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getMethod($default = null)
  {
    return Objects::property($this->_getResultJson(), 'method', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getContent($default = null)
  {
    return Objects::property($this->_getResultJson(), 'content', $default);
  }
}
      
