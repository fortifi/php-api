<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ServiceIncidentsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class ServicesServiceFidIncidentsEndpoint extends ApiEndpoint
{
  protected $_path = 'services/{serviceFid}/incidents';
  protected $_replacements = [];

  public function __construct($serviceFid)
  {
    $this->_replacements['{serviceFid}'] = $serviceFid;
  }

  /**
   * @param $incidentFid
   *
   * @return ServicesServiceFidIncidentsIncidentFidEndpoint
   */
  public function with($incidentFid)
  {
    $endpoint = new ServicesServiceFidIncidentsIncidentFidEndpoint(
      $this->_replacements['{serviceFid}'],
      $incidentFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Retrieve incidents for service within timeframe
   *
   * @param $startDate
   * @param $endDate
   *
   * @return ServiceIncidentsRequest
   */
  public function all($startDate = null, $endDate = null)
  {
    $request = new ServiceIncidentsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'services/{serviceFid}/incidents'
      )
    ));
    $detail->addQueryField('startDate', $startDate);
    $detail->addQueryField('endDate', $endDate);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
