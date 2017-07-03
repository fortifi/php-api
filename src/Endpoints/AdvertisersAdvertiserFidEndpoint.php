<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\AdvertiserRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class AdvertisersAdvertiserFidEndpoint extends ApiEndpoint
{
  protected $_path = 'advertisers/{advertiserFid}';
  protected $_replacements = [];

  public function __construct($advertiserFid)
  {
    $this->_replacements['{advertiserFid}'] = $advertiserFid;
  }

  /**
   * @return AdvertisersAdvertiserFidApprovedEndpoint
   */
  public function approved()
  {
    $endpoint = new AdvertisersAdvertiserFidApprovedEndpoint(
      $this->_replacements['{advertiserFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return AdvertisersAdvertiserFidCampaignsEndpoint
   */
  public function campaigns()
  {
    $endpoint = new AdvertisersAdvertiserFidCampaignsEndpoint(
      $this->_replacements['{advertiserFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Retrieve an advertiser
   *
   * @return AdvertiserRequest
   */
  public function retrieve()
  {
    $request = new AdvertiserRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'advertisers/{advertiserFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
