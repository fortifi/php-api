<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\OrderProductsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class OrdersOrderFidItemsEndpoint extends ApiEndpoint
{
  protected $_path = 'orders/{orderFid}/items';
  protected $_replacements = [];

  public function __construct($orderFid)
  {
    $this->_replacements['{orderFid}'] = $orderFid;
  }

  /**
   * @param $productFid
   *
   * @return OrdersOrderFidItemsProductFidEndpoint
   */
  public function with($productFid)
  {
    $endpoint = new OrdersOrderFidItemsProductFidEndpoint(
      $this->_replacements['{orderFid}'],
      $productFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary List an orders items
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
        'orders/{orderFid}/items'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
