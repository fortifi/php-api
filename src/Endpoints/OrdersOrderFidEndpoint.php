<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class OrdersOrderFidEndpoint extends ApiEndpoint
{
  protected $_baseUrl = 'http://lapi.fortifi.io:9090';
  protected $_basePath = '/v1';
  protected $_path = 'orders/{orderFid}';
  protected $_replacements = [];

  public function __construct($orderFid)
  {
    $this->_replacements['{orderFid}'] = $orderFid;
  }

  /**
   * @return OrdersOrderFidProductsEndpoint
   */
  public function products()
  {
    $endpoint = new OrdersOrderFidProductsEndpoint(
      $this->_replacements['{orderFid}']
    );
    $endpoint->setConnection($this->_getConnection());
    return $endpoint;
  }
}
