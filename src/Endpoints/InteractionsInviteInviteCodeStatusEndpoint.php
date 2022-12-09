<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\InteractionInviteStatusRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class InteractionsInviteInviteCodeStatusEndpoint extends ApiEndpoint
{
  protected $_path = 'interactions/invite/{inviteCode}/status';
  protected $_replacements = [];

  public function __construct($inviteCode)
  {
    $this->_replacements['{inviteCode}'] = $inviteCode;
  }

  /**
   * @summary Get an interaction Invite Status
   *
   * @param $contactFid
   * @param $dataNodeFid
   *
   * @return InteractionInviteStatusRequest
   */
  public function all($contactFid = null, $dataNodeFid = null)
  {
    $request = new InteractionInviteStatusRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'interactions/invite/{inviteCode}/status'
      )
    ));
    $detail->addQueryField('contactFid', $contactFid);
    $detail->addQueryField('dataNodeFid', $dataNodeFid);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
