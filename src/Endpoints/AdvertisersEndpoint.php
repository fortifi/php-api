<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\FidRequest;
use Fortifi\Api\V1\Requests\AdvertisersRequest;
use Fortifi\Api\V1\Payloads\CreateAdvertiserPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class AdvertisersEndpoint extends ApiEndpoint
{
  protected $_path = 'advertisers';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $advertiserFid
   *
   * @return AdvertisersAdvertiserFidEndpoint
   */
  public function with($advertiserFid)
  {
    $endpoint = new AdvertisersAdvertiserFidEndpoint(
      $advertiserFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Create a new advertiser
   *
   * @param CreateAdvertiserPayload $payload
   *
   * @return FidRequest
   */
  public function create(CreateAdvertiserPayload $payload)
  {
    $request = new FidRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('advertisers'));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary List advertisers
   *
   * @param $limit
   * @param $page
   *
   * @return AdvertisersRequest
   */
  public function all($limit = null, $page = null)
  {
    $request = new AdvertisersRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('advertisers'));
    $detail->addQueryField('limit', $limit);
    $detail->addQueryField('page', $page);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
