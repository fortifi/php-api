<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\PublisherCampaignRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class PublishersPublisherFidCampaignsPublisherCampaignFidEndpoint extends ApiEndpoint
{
  protected $_path = 'publishers/{publisherFid}/campaigns/{publisherCampaignFid}';
  protected $_replacements = [];

  public function __construct($publisherFid, $publisherCampaignFid)
  {
    $this->_replacements['{publisherFid}'] = $publisherFid;
    $this->_replacements['{publisherCampaignFid}'] = $publisherCampaignFid;
  }

  /**
   * @summary Retrieve a publisher campaign
   *
   * @return PublisherCampaignRequest
   */
  public function retrieve()
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
        'publishers/{publisherFid}/campaigns/{publisherCampaignFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
