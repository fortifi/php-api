<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ServicesRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class ServicesEndpoint extends ApiEndpoint
{
  protected $_path = 'services';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $serviceFid
   *
   * @return ServicesServiceFidEndpoint
   */
  public function with($serviceFid)
  {
    $endpoint = new ServicesServiceFidEndpoint(
      $serviceFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Retrieve all services
   *
   * @return ServicesRequest
   */
  public function all()
  {
    $request = new ServicesRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('services'));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
