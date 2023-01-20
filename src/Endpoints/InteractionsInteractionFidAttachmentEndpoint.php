<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class InteractionsInteractionFidAttachmentEndpoint extends ApiEndpoint
{
  protected $_path = 'interactions/{interactionFid}/attachment';
  protected $_replacements = [];

  public function __construct($interactionFid)
  {
    $this->_replacements['{interactionFid}'] = $interactionFid;
  }

  /**
   * @summary Create an Interaction Attachment
   *
   * @param $filename
   *
   * @return BoolMessageRequest
   */
  public function create($filename = null)
  {
    $request = new BoolMessageRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'interactions/{interactionFid}/attachment'
      )
    ));
    $detail->addQueryField('filename', $filename);
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
