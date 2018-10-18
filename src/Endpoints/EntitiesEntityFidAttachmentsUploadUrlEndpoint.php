<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\AttachmentUrlRequest;
use Fortifi\Api\V1\Payloads\RequestUploadUrlPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class EntitiesEntityFidAttachmentsUploadUrlEndpoint extends ApiEndpoint
{
  protected $_path = 'entities/{entityFid}/attachments/uploadUrl';
  protected $_replacements = [];

  public function __construct($entityFid)
  {
    $this->_replacements['{entityFid}'] = $entityFid;
  }

  /**
   * @summary Create an upload url
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
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'entities/{entityFid}/attachments/uploadUrl'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
