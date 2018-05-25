<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class ProductsProductFidEndpoint extends ApiEndpoint
{
  protected $_path = 'products/{productFid}';
  protected $_replacements = [];

  public function __construct($productFid)
  {
    $this->_replacements['{productFid}'] = $productFid;
  }

  /**
   * @return ProductsProductFidPricesEndpoint
   */
  public function prices()
  {
    $endpoint = new ProductsProductFidPricesEndpoint(
      $this->_replacements['{productFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
