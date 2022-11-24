<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\V1\Payloads\CreateJourneyTrackPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class InteractionsJourneyEndpoint extends ApiEndpoint
{
  protected $_path = 'interactions/journey';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @summary Create A Customer Journey
   *
   * @param CreateJourneyTrackPayload $payload
   *
   * @return BoolMessageRequest
   */
  public function create(CreateJourneyTrackPayload $payload)
  {
    $request = new BoolMessageRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('interactions/journey'));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
