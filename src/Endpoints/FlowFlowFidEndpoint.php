<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class FlowFlowFidEndpoint extends ApiEndpoint
{
  protected $_path = 'flow/{flowFid}';
  protected $_replacements = [];

  public function __construct($flowFid)
  {
    $this->_replacements['{flowFid}'] = $flowFid;
  }

  /**
   * @return FlowFlowFidLogEndpoint
   */
  public function log()
  {
    $endpoint = new FlowFlowFidLogEndpoint(
      $this->_replacements['{flowFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
