<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PublishersRequest
  extends PaginationRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "publishers" => $this->getPublishers(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return PublisherRequest[]
   */
  public function getPublishers($default = [])
  {
    return Objects::property($this->_getResultJson(), 'publishers', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->publishers))
    {
      foreach($return->publishers as $itmKey => $itm)
      {
        $return->publishers[$itmKey] = (new PublisherRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
