<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class ReasonsEndpoint extends ApiEndpoint
{
  protected $_path = 'reasons';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @return ReasonsGroupsEndpoint
   */
  public function groups()
  {
    $endpoint = new ReasonsGroupsEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
