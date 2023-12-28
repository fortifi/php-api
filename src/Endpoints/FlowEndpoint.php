<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class FlowEndpoint extends ApiEndpoint
{
  protected $_path = 'flow';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $flowFid
   *
   * @return FlowFlowFidEndpoint
   */
  public function with($flowFid)
  {
    $endpoint = new FlowFlowFidEndpoint(
      $flowFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
