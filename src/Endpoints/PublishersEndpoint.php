<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\PublishersRequest;
use Fortifi\Api\V1\Requests\PublisherRequest;
use Fortifi\Api\V1\Payloads\CreatePublisherPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class PublishersEndpoint extends ApiEndpoint
{
  protected $_path = 'publishers';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $publisherFid
   *
   * @return PublishersPublisherFidEndpoint
   */
  public function with($publisherFid)
  {
    $endpoint = new PublishersPublisherFidEndpoint(
      $publisherFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Create a new publisher
   *
   * @param CreatePublisherPayload $payload
   *
   * @return PublisherRequest
   */
  public function create(CreatePublisherPayload $payload)
  {
    $request = new PublisherRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('publishers'));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary List publishers
   *
   * @param $limit
   * @param $page
   *
   * @return PublishersRequest
   */
  public function all($limit = null, $page = null)
  {
    $request = new PublishersRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('publishers'));
    $detail->addQueryField('limit', $limit);
    $detail->addQueryField('page', $page);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
