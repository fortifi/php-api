<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\AttachmentUrlRequest;
use Fortifi\Api\V1\Payloads\RequestUploadUrlPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class UploadUploadUrlEndpoint extends ApiEndpoint
{
  protected $_path = 'upload/uploadUrl';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @summary Create an upload attachment url
   *
   * This call will give you a URL to PUT files to and a unique filename. You
   * can upload files to the URL like this: ```curl -X PUT -d @filename -H
   * 'content-type: text/plain' 'url'```
   *
   * @param RequestUploadUrlPayload $payload
   *
   * @return AttachmentUrlRequest
   */
  public function create(RequestUploadUrlPayload $payload)
  {
    $request = new AttachmentUrlRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('upload/uploadUrl'));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
