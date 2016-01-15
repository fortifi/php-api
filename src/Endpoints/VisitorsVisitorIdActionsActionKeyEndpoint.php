<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\VisitorReversalActionRequest;
use Fortifi\Api\V1\Requests\VisitorPostActionRequest;
use Fortifi\Api\V1\Payloads\ReverseActionPayload;
use Fortifi\Api\V1\Payloads\PostActionPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class VisitorsVisitorIdActionsActionKeyEndpoint extends ApiEndpoint
{
  protected $_path = 'visitors/{visitorId}/actions/{actionKey}';
  protected $_replacements = [];

  public function __construct($visitorId, $actionKey)
  {
    $this->_replacements['{visitorId}'] = $visitorId;
    $this->_replacements['{actionKey}'] = $actionKey;
  }

  /**
   * @summary Track an action
   *
   * Track an action such as a lead or acquisition
   *
   * @param PostActionPayload $payload
   *
   * @return VisitorPostActionRequest
   */
  public function create(PostActionPayload $payload)
  {
    $request = new VisitorPostActionRequest();
    $request->setConnection($this->_getConnection());
    $detail = new ApiRequestDetail();
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'visitors/{visitorId}/actions/{actionKey}'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Reverse a previously tracked action
   *
   * When an action has been reversed, e.g. cancelled, refunded
   *
   * @param ReverseActionPayload $payload
   *
   * @return VisitorReversalActionRequest
   */
  public function createReverse(ReverseActionPayload $payload)
  {
    $request = new VisitorReversalActionRequest();
    $request->setConnection($this->_getConnection());
    $detail = new ApiRequestDetail();
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'visitors/{visitorId}/actions/{actionKey}/reverse'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
