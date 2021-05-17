<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class PolymersListCodeEndpoint extends ApiEndpoint
{
  protected $_path = 'polymers/list/{code}';
  protected $_replacements = [];

  public function __construct($code)
  {
    $this->_replacements['{code}'] = $code;
  }

  /**
   * @param $parentFid
   *
   * @return PolymersListCodeParentFidEndpoint
   */
  public function with($parentFid)
  {
    $endpoint = new PolymersListCodeParentFidEndpoint(
      $this->_replacements['{code}'],
      $parentFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
