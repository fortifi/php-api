<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class PolymersEndpoint extends ApiEndpoint
{
  protected $_path = 'polymers';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $parentFid
   *
   * @return PolymersParentFidEndpoint
   */
  public function with($parentFid)
  {
    $endpoint = new PolymersParentFidEndpoint(
      $parentFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return PolymersListEndpoint
   */
  public function list()
  {
    $endpoint = new PolymersListEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
