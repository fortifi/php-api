<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ReservationRequest;
use Fortifi\Api\V1\Payloads\ReservationPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class ReservationsKeyApplicationBrandFidCustomerFidEndpoint extends ApiEndpoint
{
  protected $_path = 'reservations/{key}/{application}/{brandFid}/{customerFid}';
  protected $_replacements = [];

  public function __construct($key, $application, $brandFid, $customerFid)
  {
    $this->_replacements['{key}'] = $key;
    $this->_replacements['{application}'] = $application;
    $this->_replacements['{brandFid}'] = $brandFid;
    $this->_replacements['{customerFid}'] = $customerFid;
  }

  /**
   * @summary Make a new reservation
   *
   * Reserve against a key
   *
   * @param ReservationPayload $payload
   *
   * @return ReservationRequest
   */
  public function create(ReservationPayload $payload)
  {
    $request = new ReservationRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'reservations/{key}/{application}/{brandFid}/{customerFid}'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
