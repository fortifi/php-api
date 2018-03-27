<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ProductsRequest;
use Fortifi\Api\V1\Requests\ProductOffersRequest;
use Fortifi\Api\V1\Requests\ProductGroupsRequest;
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
    $endpoint->_buildFromEndpoint($this);
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
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('products'));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Get a list of all product groups
   *
   * @return ProductGroupsRequest
   */
  public function groups()
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

  /**
   * @summary Retrieve all offers
   *
   * @return ProductOffersRequest
   */
  public function offers()
  {
    $request = new ProductOffersRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('products/offers'));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
