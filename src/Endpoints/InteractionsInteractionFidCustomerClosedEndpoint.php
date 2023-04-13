<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class InteractionsInteractionFidCustomerClosedEndpoint extends ApiEndpoint
{
  protected $_path = 'interactions/{interactionFid}/customerClosed';
  protected $_replacements = [];

  public function __construct($interactionFid)
  {
    $this->_replacements['{interactionFid}'] = $interactionFid;
  }

  /**
   * @summary The Customer has purposely closed the interaction
   *
   * @return BoolMessageRequest
   */
  public function create()
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
        'interactions/{interactionFid}/customerClosed'
      )
    ));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
