<?php
namespace Fortifi\Api\V1\Payloads;

class AddOrderProductsPayload
  extends OrderProductsPayload
  implements \JsonSerializable
{

  public function hydrate($data)
  {
    $data = (array)$data;
    parent::hydrate($data);
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
      ]
    );
  }
}
