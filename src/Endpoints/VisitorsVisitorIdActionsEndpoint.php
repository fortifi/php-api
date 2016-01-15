<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class VisitorsVisitorIdActionsEndpoint extends ApiEndpoint
{
  protected $_path = 'visitors/{visitorId}/actions';
  protected $_replacements = [];

  public function __construct($visitorId)
  {
    $this->_replacements['{visitorId}'] = $visitorId;
  }

  /**
   * @param $actionKey
   *
   * @return VisitorsVisitorIdActionsActionKeyEndpoint
   */
  public function with($actionKey)
  {
    $endpoint = new VisitorsVisitorIdActionsActionKeyEndpoint(
      $this->_replacements['{visitorId}'],
      $actionKey
    );
    $endpoint->setApiDefinition($this->getApiDefinition());
    $endpoint->setConnection($this->_getConnection());
    return $endpoint;
  }
}
