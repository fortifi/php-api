<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class VisitorsEndpoint extends ApiEndpoint
{
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
    $endpoint->setApiDefinition($this->getApiDefinition());
    $endpoint->setConnection($this->_getConnection());
    return $endpoint;
  }
}
