<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class ServicesServiceFidIncidentsIncidentFidEndpoint extends ApiEndpoint
{
  protected $_path = 'services/{serviceFid}/incidents/{incidentFid}';
  protected $_replacements = [];

  public function __construct($serviceFid, $incidentFid)
  {
    $this->_replacements['{serviceFid}'] = $serviceFid;
    $this->_replacements['{incidentFid}'] = $incidentFid;
  }

  /**
   * @return ServicesServiceFidIncidentsIncidentFidUpdatesEndpoint
   */
  public function updates()
  {
    $endpoint = new ServicesServiceFidIncidentsIncidentFidUpdatesEndpoint(
      $this->_replacements['{serviceFid}'],
      $this->_replacements['{incidentFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
