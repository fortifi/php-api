<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\OrderProductsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class OrdersOrderFidProductsEndpoint extends ApiEndpoint
{
  protected $_baseUrl = 'http://lapi.fortifi.io:9090';
  protected $_basePath = '/v1';
  protected $_path = 'orders/{orderFid}/products';
  protected $_replacements = [];

  public function __construct($orderFid)
  {
    $this->_replacements['{orderFid}'] = $orderFid;
  }

  /**
   * @param $productFid
   *
   * @return OrdersOrderFidProductsProductFidEndpoint
   */
  public function with($productFid)
  {
    $endpoint = new OrdersOrderFidProductsProductFidEndpoint(
      $this->_replacements['{orderFid}'],
      $productFid
    );
    $endpoint->setConnection($this->_getConnection());
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
    $detail = new ApiRequestDetail();
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
}
