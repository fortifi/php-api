<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\TicketPostsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class TicketsTicketFidPostsEndpoint extends ApiEndpoint
{
  protected $_path = 'tickets/{ticketFid}/posts';
  protected $_replacements = [];

  public function __construct($ticketFid)
  {
    $this->_replacements['{ticketFid}'] = $ticketFid;
  }

  /**
   * @summary Retrieve ticket posts for a ticket
   *
   * @param $limit
   * @param $beforeTimestamp
   * @param $includeHtml
   *
   * @return TicketPostsRequest
   */
  public function all($limit = null, $beforeTimestamp = null, $includeHtml = null)
  {
    $request = new TicketPostsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'tickets/{ticketFid}/posts'
      )
    ));
    $detail->addQueryField('limit', $limit);
    $detail->addQueryField('beforeTimestamp', $beforeTimestamp);
    $detail->addQueryField('includeHtml', $includeHtml);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
