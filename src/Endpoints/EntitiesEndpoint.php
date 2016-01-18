<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class EntitiesEndpoint extends ApiEndpoint
{
  protected $_path = 'entities';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $entityFid
   *
   * @return EntitiesEntityFidEndpoint
   */
  public function with($entityFid)
  {
    $endpoint = new EntitiesEntityFidEndpoint(
      $entityFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
