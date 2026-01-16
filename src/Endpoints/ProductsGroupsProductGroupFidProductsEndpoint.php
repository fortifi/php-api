<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ProductsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class ProductsGroupsProductGroupFidProductsEndpoint extends ApiEndpoint
{
  protected $_path = 'products/groups/{productGroupFid}/products';
  protected $_replacements = [];

  public function __construct($productGroupFid)
  {
    $this->_replacements['{productGroupFid}'] = $productGroupFid;
  }

  /**
   * @param $productFid
   *
   * @return ProductsGroupsProductGroupFidProductsProductFidEndpoint
   */
  public function with($productFid)
  {
    $endpoint = new ProductsGroupsProductGroupFidProductsProductFidEndpoint(
      $this->_replacements['{productGroupFid}'],
      $productFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Get a list of products belonging to the group
   *
   * @return ProductsRequest
   */
  public function all()
  {
    $request = new ProductsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'products/groups/{productGroupFid}/products'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
