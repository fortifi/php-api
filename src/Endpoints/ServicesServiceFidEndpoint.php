<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class ServicesServiceFidEndpoint extends ApiEndpoint
{
  protected $_path = 'services/{serviceFid}';
  protected $_replacements = [];

  public function __construct($serviceFid)
  {
    $this->_replacements['{serviceFid}'] = $serviceFid;
  }

  /**
   * @return ServicesServiceFidIncidentsEndpoint
   */
  public function incidents()
  {
    $endpoint = new ServicesServiceFidIncidentsEndpoint(
      $this->_replacements['{serviceFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
