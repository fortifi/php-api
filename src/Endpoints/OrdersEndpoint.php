<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\FidRequest;
use Fortifi\Api\V1\Payloads\CreateOrderPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class OrdersEndpoint extends ApiEndpoint
{
  protected $_path = 'orders';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $orderFid
   *
   * @return OrdersOrderFidEndpoint
   */
  public function with($orderFid)
  {
    $endpoint = new OrdersOrderFidEndpoint(
      $orderFid
    );
    $endpoint->setApiDefinition($this->getApiDefinition());
    $endpoint->setConnection($this->_getConnection());
    return $endpoint;
  }

  /**
   * @summary Create a new order
   *
   * @param CreateOrderPayload $payload
   *
   * @return FidRequest
   */
  public function create(CreateOrderPayload $payload)
  {
    $request = new FidRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('orders'));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
