<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\AdvertiserCampaignRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class AdvertisersAdvertiserFidCampaignsAdvertiserCampaignFidEndpoint extends ApiEndpoint
{
  protected $_path = 'advertisers/{advertiserFid}/campaigns/{advertiserCampaignFid}';
  protected $_replacements = [];

  public function __construct($advertiserFid, $advertiserCampaignFid)
  {
    $this->_replacements['{advertiserFid}'] = $advertiserFid;
    $this->_replacements['{advertiserCampaignFid}'] = $advertiserCampaignFid;
  }

  /**
   * @summary Retrieve an advertiser campaign
   *
   * @return AdvertiserCampaignRequest
   */
  public function retrieve()
  {
    $request = new AdvertiserCampaignRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'advertisers/{advertiserFid}/campaigns/{advertiserCampaignFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
