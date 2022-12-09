<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\InteractionInviteStatusRequest;
use Fortifi\Api\V1\Payloads\CreateInteractionInvitationPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class InteractionsInviteEndpoint extends ApiEndpoint
{
  protected $_path = 'interactions/invite';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $inviteCode
   *
   * @return InteractionsInviteInviteCodeEndpoint
   */
  public function with($inviteCode)
  {
    $endpoint = new InteractionsInviteInviteCodeEndpoint(
      $inviteCode
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Create an interaction Invite
   *
   * @param CreateInteractionInvitationPayload $payload
   *
   * @return InteractionInviteStatusRequest
   */
  public function create(CreateInteractionInvitationPayload $payload)
  {
    $request = new InteractionInviteStatusRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('interactions/invite'));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
