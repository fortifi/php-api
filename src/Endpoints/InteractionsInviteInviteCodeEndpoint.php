<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\InteractionRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class InteractionsInviteInviteCodeEndpoint extends ApiEndpoint
{
  protected $_path = 'interactions/invite/{inviteCode}';
  protected $_replacements = [];

  public function __construct($inviteCode)
  {
    $this->_replacements['{inviteCode}'] = $inviteCode;
  }

  /**
   * @return InteractionsInviteInviteCodeStatusEndpoint
   */
  public function status()
  {
    $endpoint = new InteractionsInviteInviteCodeStatusEndpoint(
      $this->_replacements['{inviteCode}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Accept an interaction Invite
   *
   * @param $contactFid
   * @param $dataNodeFid
   *
   * @return InteractionRequest
   */
  public function create($contactFid = null, $dataNodeFid = null)
  {
    $request = new InteractionRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'interactions/invite/{inviteCode}'
      )
    ));
    $detail->addQueryField('contactFid', $contactFid);
    $detail->addQueryField('dataNodeFid', $dataNodeFid);
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
