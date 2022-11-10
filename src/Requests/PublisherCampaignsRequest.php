<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PublisherCampaignsRequest
  extends PaginationRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "campaigns" => $this->getCampaigns(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return PublisherCampaignRequest[]
   */
  public function getCampaigns($default = [])
  {
    return Objects::property($this->_getResultJson(), 'campaigns', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->campaigns))
    {
      foreach($return->campaigns as $itmKey => $itm)
      {
        $return->campaigns[$itmKey] = (new PublisherCampaignRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
