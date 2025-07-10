<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class TicketsSearchEndpoint extends ApiEndpoint
{
  protected $_path = 'tickets/search';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @summary Search for tickets
   *
   * @param $limit
   * @param $page
   * @param $beforeTimestamp
   * @param $afterTimestamp
   * @param $subject
   *
   * @return ApiRequest
   */
  public function all($limit = null, $page = null, $beforeTimestamp = null, $afterTimestamp = null, $subject = null)
  {
    $request = new ApiRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('tickets/search'));
    $detail->addQueryField('limit', $limit);
    $detail->addQueryField('page', $page);
    $detail->addQueryField('beforeTimestamp', $beforeTimestamp);
    $detail->addQueryField('afterTimestamp', $afterTimestamp);
    $detail->addQueryField('subject', $subject);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
