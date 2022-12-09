<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\EnvelopeRequest;
use Fortifi\Api\V1\Payloads\InteractionActionPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class InteractionsInteractionFidClientDisconnectedEndpoint extends ApiEndpoint
{
  protected $_path = 'interactions/{interactionFid}/client/disconnected';
  protected $_replacements = [];

  public function __construct($interactionFid)
  {
    $this->_replacements['{interactionFid}'] = $interactionFid;
  }

  /**
   * @summary A Client has disconnected from the Interaction
   *
   * @param InteractionActionPayload $payload
   *
   * @return EnvelopeRequest
   */
  public function create(InteractionActionPayload $payload)
  {
    $request = new EnvelopeRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'interactions/{interactionFid}/client/disconnected'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
