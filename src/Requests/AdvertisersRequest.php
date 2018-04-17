<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class AdvertisersRequest
  extends PaginationRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "advertisers" => $this->getAdvertisers(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return AdvertiserRequest[]
   */
  public function getAdvertisers($default = [])
  {
    return Objects::property($this->_getResultJson(), 'advertisers', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->advertisers))
    {
      $tmp = [];
      foreach($return->advertisers as $itm)
      {
        $tmp[] = (new AdvertiserRequest())
          ->hydrate($itm);
      }
      $return->advertisers = $tmp;
    }

    return $return;
  }
}
