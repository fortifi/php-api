<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Payloads\OrderProductPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class OrdersOrderFidProductsProductFidEndpoint extends ApiEndpoint
{
  protected $_baseUrl = 'http://lapi.fortifi.io:9090';
  protected $_basePath = '/v1';
  protected $_path = 'orders/{orderFid}/products/{productFid}';
  protected $_replacements = [];

  public function __construct($orderFid, $productFid)
  {
    $this->_replacements['{orderFid}'] = $orderFid;
    $this->_replacements['{productFid}'] = $productFid;
  }

  /**
   * @summary Add a product to an order
   *
   * @param OrderProductPayload $payload
   *
   * @return ApiRequest
   */
  public function delete(OrderProductPayload $payload)
  {
    $request = new ApiRequest();
    $request->setConnection($this->_getConnection());
    $detail = new ApiRequestDetail();
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'orders/{orderFid}/products/{productFid}'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('DELETE');
    $request->setRequestDetail($detail);
    return $request;
  }
}
