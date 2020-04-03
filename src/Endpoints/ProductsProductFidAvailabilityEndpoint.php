<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\AvailabilityReserveRequest;
use Fortifi\Api\V1\Requests\AvailabilityCheckRequest;
use Fortifi\Api\V1\Payloads\AvailabilityReservePayload;
use Fortifi\Api\V1\Payloads\AvailabilityCheckPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class ProductsProductFidAvailabilityEndpoint extends ApiEndpoint
{
  protected $_path = 'products/{productFid}/availability';
  protected $_replacements = [];

  public function __construct($productFid)
  {
    $this->_replacements['{productFid}'] = $productFid;
  }

  /**
   * @summary Check Product Availability
   *
   * @param AvailabilityCheckPayload $payload
   *
   * @return AvailabilityCheckRequest
   */
  public function createCheck(AvailabilityCheckPayload $payload)
  {
    $request = new AvailabilityCheckRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'products/{productFid}/availability/check'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Reserve Product
   *
   * @param AvailabilityReservePayload $payload
   *
   * @return AvailabilityReserveRequest
   */
  public function createReserve(AvailabilityReservePayload $payload)
  {
    $request = new AvailabilityReserveRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'products/{productFid}/availability/reserve'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
