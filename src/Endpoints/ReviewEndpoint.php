<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\FidRequest;
use Fortifi\Api\V1\Payloads\CreateReviewPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class ReviewEndpoint extends ApiEndpoint
{
  protected $_path = 'review';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @summary Create a new Review and Review audit
   *
   * @param CreateReviewPayload $payload
   *
   * @return FidRequest
   */
  public function create(CreateReviewPayload $payload)
  {
    $request = new FidRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('review'));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
