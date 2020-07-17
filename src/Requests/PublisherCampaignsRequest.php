<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PublisherCampaignsRequest
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
   * @return PublisherCampaignRequest[]
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
      foreach($return->advertisers as $itmKey => $itm)
      {
        $return->advertisers[$itmKey] = (new PublisherCampaignRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
