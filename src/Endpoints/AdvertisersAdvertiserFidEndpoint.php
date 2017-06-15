<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\AdvertiserRequest;
use Fortifi\Api\V1\Payloads\UpdateAdvertiserApprovedPayload;
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

  /**
   * @summary Change approved status on an advertiser
   *
   * @param UpdateAdvertiserApprovedPayload $payload
   *
   * @return AdvertiserRequest
   */
  public function setApproved(UpdateAdvertiserApprovedPayload $payload)
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
        'advertisers/{advertiserFid}/approved'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
