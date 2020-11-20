<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class OrdersOrderFidItemsProductFidEndpoint extends ApiEndpoint
{
  protected $_path = 'orders/{orderFid}/items/{productFid}';
  protected $_replacements = [];

  public function __construct($orderFid, $productFid)
  {
    $this->_replacements['{orderFid}'] = $orderFid;
    $this->_replacements['{productFid}'] = $productFid;
  }

  /**
   * @param $orderItemFid
   *
   * @return OrdersOrderFidItemsProductFidOrderItemFidEndpoint
   */
  public function with($orderItemFid)
  {
    $endpoint = new OrdersOrderFidItemsProductFidOrderItemFidEndpoint(
      $this->_replacements['{orderFid}'],
      $this->_replacements['{productFid}'],
      $orderItemFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
