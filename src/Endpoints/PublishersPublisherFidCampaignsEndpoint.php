<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\PublisherCampaignsRequest;
use Fortifi\Api\V1\Requests\PublisherCampaignRequest;
use Fortifi\Api\V1\Payloads\CreatePublisherCampaignPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class PublishersPublisherFidCampaignsEndpoint extends ApiEndpoint
{
  protected $_path = 'publishers/{publisherFid}/campaigns';
  protected $_replacements = [];

  public function __construct($publisherFid)
  {
    $this->_replacements['{publisherFid}'] = $publisherFid;
  }

  /**
   * @param $publisherCampaignFid
   *
   * @return PublishersPublisherFidCampaignsPublisherCampaignFidEndpoint
   */
  public function with($publisherCampaignFid)
  {
    $endpoint = new PublishersPublisherFidCampaignsPublisherCampaignFidEndpoint(
      $this->_replacements['{publisherFid}'],
      $publisherCampaignFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary List campaigns
   *
   * @param $limit
   * @param $page
   *
   * @return PublisherCampaignsRequest
   */
  public function all($limit = null, $page = null)
  {
    $request = new PublisherCampaignsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'publishers/{publisherFid}/campaigns'
      )
    ));
    $detail->addQueryField('limit', $limit);
    $detail->addQueryField('page', $page);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Create a new publisher campaign
   *
   * @param CreatePublisherCampaignPayload $payload
   *
   * @return PublisherCampaignRequest
   */
  public function create(CreatePublisherCampaignPayload $payload)
  {
    $request = new PublisherCampaignRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'publishers/{publisherFid}/campaigns'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
