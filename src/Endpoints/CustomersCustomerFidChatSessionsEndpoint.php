<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ChatSessionsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class CustomersCustomerFidChatSessionsEndpoint extends ApiEndpoint
{
  protected $_path = 'customers/{customerFid}/chatSessions';
  protected $_replacements = [];

  public function __construct($customerFid)
  {
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @summary Retrieve chat sessions for customer
   *
   * @param $limit
   * @param $page
   *
   * @return ChatSessionsRequest
   */
  public function all($limit = null, $page = null)
  {
    $request = new ChatSessionsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'customers/{customerFid}/chatSessions'
      )
    ));
    $detail->addQueryField('limit', $limit);
    $detail->addQueryField('page', $page);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
