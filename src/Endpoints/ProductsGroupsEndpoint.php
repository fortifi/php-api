<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ProductGroupsRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class ProductsGroupsEndpoint extends ApiEndpoint
{
  protected $_path = 'products/groups';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @param $productGroupFid
   *
   * @return ProductsGroupsProductGroupFidEndpoint
   */
  public function with($productGroupFid)
  {
    $endpoint = new ProductsGroupsProductGroupFidEndpoint(
      $productGroupFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Get a list of all product groups
   *
   * @return ProductGroupsRequest
   */
  public function all()
  {
    $request = new ProductGroupsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('products/groups'));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
