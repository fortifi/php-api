<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ResourceAllocationRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "resourceFid" => $this->getResourceFid(),
      "allocation" => $this->getAllocation(),
      "resourceGatewayPath" => $this->getResourceGatewayPath(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getResourceFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'resourceFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAllocation($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'allocation', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getResourceGatewayPath($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'resourceGatewayPath', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
