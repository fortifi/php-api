<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class InteractionsInteractionFidFeedbackEndpoint extends ApiEndpoint
{
  protected $_path = 'interactions/{interactionFid}/feedback';
  protected $_replacements = [];

  public function __construct($interactionFid)
  {
    $this->_replacements['{interactionFid}'] = $interactionFid;
  }

  /**
   * @summary Submit Feedback to an interaction
   *
   * @param $rating
   *
   * @return BoolMessageRequest
   */
  public function create($rating)
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
        'interactions/{interactionFid}/feedback'
      )
    ));
    $detail->addQueryField('rating', $rating);
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
