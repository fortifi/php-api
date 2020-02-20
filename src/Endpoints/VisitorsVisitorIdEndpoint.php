<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\VisitorRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class VisitorsVisitorIdEndpoint extends ApiEndpoint
{
  protected $_path = 'visitors/{visitorId}';
  protected $_replacements = [];

  public function __construct($visitorId)
  {
    $this->_replacements['{visitorId}'] = $visitorId;
  }

  /**
   * @return VisitorsVisitorIdActionsEndpoint
   */
  public function actions()
  {
    $endpoint = new VisitorsVisitorIdActionsEndpoint(
      $this->_replacements['{visitorId}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return VisitorsVisitorIdPixelsEndpoint
   */
  public function pixels()
  {
    $endpoint = new VisitorsVisitorIdPixelsEndpoint(
      $this->_replacements['{visitorId}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Retrieve information about a visitor
   *
   * This call will return information related to how a visitor arrived
   *
   * @return VisitorRequest
   */
  public function retrieve()
  {
    $request = new VisitorRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'visitors/{visitorId}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
