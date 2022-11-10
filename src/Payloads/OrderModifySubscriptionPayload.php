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
  protected $_properties;

  public function hydrate($data)
  {
    $data = (array)$data;
    parent::hydrate($data);
    if(isset($data["sourceSubscriptionFid"]))
    {
      $this->_sourceSubscriptionFid = (string)$data["sourceSubscriptionFid"];
    }
    if(isset($data["properties"]))
    {
      $this->_properties = new PropertyBulkSetPayload();
      $this->_properties->hydrate($data["properties"]);
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "sourceSubscriptionFid" => $this->_sourceSubscriptionFid,
        "properties"            => $this->_properties,
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

  /**
   * @param PropertyBulkSetPayload $value
   *
   * @return $this
   */
  public function setProperties(?PropertyBulkSetPayload $value)
  {
    $this->_properties = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return PropertyBulkSetPayload
   */
  public function getProperties($default = null)
  {
    return $this->_properties ?: $default;
  }
}
