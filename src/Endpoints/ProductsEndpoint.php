<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ProductsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class ProductsEndpoint extends ApiEndpoint
{
  protected $_path = 'products';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $productFid
   *
   * @return ProductsProductFidEndpoint
   */
  public function with($productFid)
  {
    $endpoint = new ProductsProductFidEndpoint(
      $productFid
    );
    $endpoint->setApiDefinition($this->getApiDefinition());
    $endpoint->setConnection($this->_getConnection());
    return $endpoint;
  }

  /**
   * @summary List all products
   *
   * @return ProductsRequest
   */
  public function all()
  {
    $request = new ProductsRequest();
    $request->setConnection($this->_getConnection());
    $detail = new ApiRequestDetail();
    $detail->setUrl($this->_buildUrl('products'));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
