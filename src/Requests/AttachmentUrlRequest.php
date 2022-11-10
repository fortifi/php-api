<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class AttachmentUrlRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "url" => $this->getUrl(),
      "file" => $this->getFile(),
    ];
  }

  /**
   * URL to upload attachment to
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getUrl($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'url', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getFile($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'file', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
