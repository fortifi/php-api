<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\InteractionMessagesRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class InteractionsInteractionFidMessagesEndpoint extends ApiEndpoint
{
  protected $_path = 'interactions/{interactionFid}/messages';
  protected $_replacements = [];

  public function __construct($interactionFid)
  {
    $this->_replacements['{interactionFid}'] = $interactionFid;
  }

  /**
   * @summary Get all Messages on an interaction
   *
   * @param $sinceTime
   * @param $sortOrder
   *
   * @return InteractionMessagesRequest
   */
  public function all($sinceTime = null, $sortOrder = null)
  {
    $request = new InteractionMessagesRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'interactions/{interactionFid}/messages'
      )
    ));
    $detail->addQueryField('sinceTime', $sinceTime);
    $detail->addQueryField('sortOrder', $sortOrder);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
