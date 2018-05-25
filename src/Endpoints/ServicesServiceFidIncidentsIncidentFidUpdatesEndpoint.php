<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\IncidentUpdatesRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class ServicesServiceFidIncidentsIncidentFidUpdatesEndpoint extends ApiEndpoint
{
  protected $_path = 'services/{serviceFid}/incidents/{incidentFid}/updates';
  protected $_replacements = [];

  public function __construct($serviceFid, $incidentFid)
  {
    $this->_replacements['{serviceFid}'] = $serviceFid;
    $this->_replacements['{incidentFid}'] = $incidentFid;
  }

  /**
   * @summary Retrieve incident updates for incident
   *
   * @return IncidentUpdatesRequest
   */
  public function all()
  {
    $request = new IncidentUpdatesRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'services/{serviceFid}/incidents/{incidentFid}/updates'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
