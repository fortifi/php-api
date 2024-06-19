<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\V1\Payloads\CreateInteractionTicketPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class InteractionsTicketEndpoint extends ApiEndpoint
{
  protected $_path = 'interactions/ticket';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @summary Create an Interaction ticket
   *
   * The attachments property is an array of unique filenames that have been
   * created using ```/upload/uploadUrl```
   *
   * @param CreateInteractionTicketPayload $payload
   *
   * @return BoolMessageRequest
   */
  public function create(CreateInteractionTicketPayload $payload)
  {
    $request = new BoolMessageRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('interactions/ticket'));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
