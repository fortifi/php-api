<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\CommentRequest;
use Fortifi\Api\V1\Payloads\CreateCommentPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CommentsEndpoint extends ApiEndpoint
{
  protected $_path = 'comments';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @summary Apply a comment/note against a data-node
   *
   * @param CreateCommentPayload $payload
   *
   * @return CommentRequest
   */
  public function create(CreateCommentPayload $payload)
  {
    $request = new CommentRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('comments'));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
