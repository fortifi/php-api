<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ResourceAllocationsRequest
  extends PaginationRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "allocations" => $this->getAllocations(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return ResourceAllocationRequest[]
   */
  public function getAllocations($default = [])
  {
    return Objects::property($this->_getResultJson(), 'allocations', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->allocations))
    {
      foreach($return->allocations as $itmKey => $itm)
      {
        $return->allocations[$itmKey] = (new ResourceAllocationRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
