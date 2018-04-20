<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\OrderProductsRequest;
use Fortifi\Api\V1\Requests\OrderAddProductsRequest;
use Fortifi\Api\V1\Payloads\OrderProductsPayload;
use Fortifi\Api\V1\Payloads\AddOrderProductsPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class OrdersOrderFidProductsEndpoint extends ApiEndpoint
{
  protected $_path = 'orders/{orderFid}/products';
  protected $_replacements = [];

  public function __construct($orderFid)
  {
    $this->_replacements['{orderFid}'] = $orderFid;
  }

  /**
   * @param $orderProductFid
   *
   * @return OrdersOrderFidProductsOrderProductFidEndpoint
   */
  public function with($orderProductFid)
  {
    $endpoint = new OrdersOrderFidProductsOrderProductFidEndpoint(
      $this->_replacements['{orderFid}'],
      $orderProductFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Retrieve order products
   *
   * @return OrderProductsRequest
   */
  public function all()
  {
    $request = new OrderProductsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'orders/{orderFid}/products'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Add a product to an order
   *
   * @param AddOrderProductsPayload $payload
   *
   * @return OrderAddProductsRequest
   */
  public function create(AddOrderProductsPayload $payload)
  {
    $request = new OrderAddProductsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'orders/{orderFid}/products'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Set the products on an order
   *
   * @param OrderProductsPayload $payload
   *
   * @return OrderAddProductsRequest
   */
  public function setProducts(OrderProductsPayload $payload)
  {
    $request = new OrderAddProductsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'orders/{orderFid}/products'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
