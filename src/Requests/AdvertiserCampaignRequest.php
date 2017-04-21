<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class AdvertiserCampaignRequest
  extends EntityRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "hash" => $this->getHash(),
        "affiliateFid" => $this->getAffiliateFid(),
        "brandFid" => $this->getBrandFid(),
      ]
    );
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getHash($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'hash', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAffiliateFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'affiliateFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getBrandFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'brandFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
