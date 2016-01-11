<?php
namespace Fortifi\Api\V1\Endpoints;

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
}
