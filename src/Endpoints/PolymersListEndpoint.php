<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class PolymersListEndpoint extends ApiEndpoint
{
  protected $_path = 'polymers/list';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $code
   *
   * @return PolymersListCodeEndpoint
   */
  public function with($code)
  {
    $endpoint = new PolymersListCodeEndpoint(
      $code
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
