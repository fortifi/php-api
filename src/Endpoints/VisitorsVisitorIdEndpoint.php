<?php
namespace Fortifi\Api\V1\Endpoints;

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
}
