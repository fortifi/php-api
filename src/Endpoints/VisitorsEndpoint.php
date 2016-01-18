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
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
