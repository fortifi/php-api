<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiEndpoint;

class ProductsGroupsProductGroupFidEndpoint extends ApiEndpoint
{
  protected $_path = 'products/groups/{productGroupFid}';
  protected $_replacements = [];

  public function __construct($productGroupFid)
  {
    $this->_replacements['{productGroupFid}'] = $productGroupFid;
  }

  /**
   * @return ProductsGroupsProductGroupFidProductsEndpoint
   */
  public function products()
  {
    $endpoint = new ProductsGroupsProductGroupFidProductsEndpoint(
      $this->_replacements['{productGroupFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }
}
