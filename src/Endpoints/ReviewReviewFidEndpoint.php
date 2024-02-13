<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\V1\Payloads\UpdateReviewPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class ReviewReviewFidEndpoint extends ApiEndpoint
{
  protected $_path = 'review/{reviewFid}';
  protected $_replacements = [];

  public function __construct($reviewFid)
  {
    $this->_replacements['{reviewFid}'] = $reviewFid;
  }

  /**
   * @summary Update a Review
   *
   * @param UpdateReviewPayload $payload
   *
   * @return BoolMessageRequest
   */
  public function update(UpdateReviewPayload $payload)
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
        'review/{reviewFid}'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
