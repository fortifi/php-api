<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class OrderModifySubscriptionPayload
  extends ModifySubscriptionPayload
  implements \JsonSerializable
{
  /**
   * FID of the subscription to modify
   */
  protected $_sourceSubscriptionFid;

  public function hydrate($data)
  {
    $data = (array)$data;
    parent::hydrate($data);
    if(isset($data["sourceSubscriptionFid"]))
    {
      $this->_sourceSubscriptionFid = (string)$data["sourceSubscriptionFid"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "sourceSubscriptionFid" => $this->_sourceSubscriptionFid,
      ]
    );
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSourceSubscriptionFid(?string $value)
  {
    $this->_sourceSubscriptionFid = $value;
    return $this;
  }

  /**
   * FID of the subscription to modify
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSourceSubscriptionFid($default = null, $trim = true)
  {
    $value = $this->_sourceSubscriptionFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
