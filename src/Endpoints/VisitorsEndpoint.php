<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class VisitorsEndpoint extends ApiEndpoint
{
  protected $_baseUrl = 'http://lapi.fortifi.io:9090';
  protected $_basePath = '/v1';
  protected $_path = 'visitors';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $visitorId
   *
   * @return VisitorsVisitorIdEndpoint
   */
  public function with($visitorId)
  {
    $endpoint = new VisitorsVisitorIdEndpoint(
      $visitorId
    );
    $endpoint->setConnection($this->_getConnection());
    return $endpoint;
  }
}
