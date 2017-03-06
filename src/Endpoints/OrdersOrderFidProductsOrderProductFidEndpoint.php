<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class OrdersOrderFidProductsOrderProductFidEndpoint extends ApiEndpoint
{
  protected $_path = 'orders/{orderFid}/products/{orderProductFid}';
  protected $_replacements = [];

  public function __construct($orderFid, $orderProductFid)
  {
    $this->_replacements['{orderFid}'] = $orderFid;
    $this->_replacements['{orderProductFid}'] = $orderProductFid;
  }

  /**
   * @summary Remove a product from an order
   *
   * @return ApiRequest
   */
  public function delete()
  {
    $request = new ApiRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'orders/{orderFid}/products/{orderProductFid}'
      )
    ));
    $detail->setMethod('DELETE');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Set the quantity of a product on an order
   *
   * @param $quantity
   *
   * @return ApiRequest
   */
  public function setQuantity($quantity)
  {
    $request = new ApiRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'orders/{orderFid}/products/{orderProductFid}/quantity'
      )
    ));
    $detail->addPostField('quantity', $quantity);
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
