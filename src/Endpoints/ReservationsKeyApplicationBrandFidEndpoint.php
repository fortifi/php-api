<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ReservationsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class ReservationsKeyApplicationBrandFidEndpoint extends ApiEndpoint
{
  protected $_path = 'reservations/{key}/{application}/{brandFid}';
  protected $_replacements = [];

  public function __construct($key, $application, $brandFid)
  {
    $this->_replacements['{key}'] = $key;
    $this->_replacements['{application}'] = $application;
    $this->_replacements['{brandFid}'] = $brandFid;
  }

  /**
   * @param $customerFid
   *
   * @return ReservationsKeyApplicationBrandFidCustomerFidEndpoint
   */
  public function with($customerFid)
  {
    $endpoint = new ReservationsKeyApplicationBrandFidCustomerFidEndpoint(
      $this->_replacements['{key}'],
      $this->_replacements['{application}'],
      $this->_replacements['{brandFid}'],
      $customerFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Retrieve reservations
   *
   * This call will return information related to how a visitor arrived
   *
   * @return ReservationsRequest
   */
  public function retrieve()
  {
    $request = new ReservationsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'reservations/{key}/{application}/{brandFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
