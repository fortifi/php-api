<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\FidRequest;
use Fortifi\Api\V1\Payloads\CreateAdvertiserCampaignPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class AdvertisersAdvertiserFidCampaignsEndpoint extends ApiEndpoint
{
  protected $_path = 'advertisers/{advertiserFid}/campaigns';
  protected $_replacements = [];

  public function __construct($advertiserFid)
  {
    $this->_replacements['{advertiserFid}'] = $advertiserFid;
  }

  /**
   * @param $advertiserCampaignFid
   *
   * @return AdvertisersAdvertiserFidCampaignsAdvertiserCampaignFidEndpoint
   */
  public function with($advertiserCampaignFid)
  {
    $endpoint = new AdvertisersAdvertiserFidCampaignsAdvertiserCampaignFidEndpoint(
      $this->_replacements['{advertiserFid}'],
      $advertiserCampaignFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Create a new advertiser campaign
   *
   * @param CreateAdvertiserCampaignPayload $payload
   *
   * @return FidRequest
   */
  public function create(CreateAdvertiserCampaignPayload $payload)
  {
    $request = new FidRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'advertisers/{advertiserFid}/campaigns'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
