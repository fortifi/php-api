<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\MessageGroupsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class MessengerListMessageGroupsEndpoint extends ApiEndpoint
{
  protected $_path = 'messenger/listMessageGroups';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @summary List Message Groups
   *
   * @return MessageGroupsRequest
   */
  public function all()
  {
    $request = new MessageGroupsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('messenger/listMessageGroups'));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
