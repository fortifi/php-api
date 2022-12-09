<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\V1\Payloads\AddInteractionMessagePayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class InteractionsInteractionFidMessageEndpoint extends ApiEndpoint
{
  protected $_path = 'interactions/{interactionFid}/message';
  protected $_replacements = [];

  public function __construct($interactionFid)
  {
    $this->_replacements['{interactionFid}'] = $interactionFid;
  }

  /**
   * @summary Add a message to a Interaction
   *
   * @param AddInteractionMessagePayload $payload
   *
   * @return BoolMessageRequest
   */
  public function create(AddInteractionMessagePayload $payload)
  {
    $request = new BoolMessageRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'interactions/{interactionFid}/message'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
