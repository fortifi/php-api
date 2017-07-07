<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class ApplyOfferSubscriptionPayload
  implements \JsonSerializable
{
  /**
   * Offer FID to apply to subscription
   */
  protected $_offerFid;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["offerFid"]))
    {
      $this->_offerFid = $data["offerFid"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "offerFid" => $this->_offerFid,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setOfferFid($value)
  {
    $this->_offerFid = $value;
    return $this;
  }

  /**
   * Offer FID to apply to subscription
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getOfferFid($default = null, $trim = true)
  {
    $value = $this->_offerFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
