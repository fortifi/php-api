<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class SupportChatEnabledEndpoint extends ApiEndpoint
{
  protected $_path = 'support/chat-enabled';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @summary Check if chat is enabled
   *
   * @return BoolMessageRequest
   */
  public function all()
  {
    $request = new BoolMessageRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('support/chat-enabled'));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
