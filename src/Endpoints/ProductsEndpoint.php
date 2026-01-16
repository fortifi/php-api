<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ProductsRequest;
use Fortifi\Api\V1\Requests\ProductRequest;
use Fortifi\Api\V1\Payloads\CreateProductPayload;
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
   * @return ProductsGroupsEndpoint
   */
  public function groups()
  {
    $endpoint = new ProductsGroupsEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return ProductsOffersEndpoint
   */
  public function offers()
  {
    $endpoint = new ProductsOffersEndpoint();
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
   * @summary Create a new product
   *
   * @param CreateProductPayload $payload
   *
   * @return ProductRequest
   */
  public function create(CreateProductPayload $payload)
  {
    $request = new ProductRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('products'));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
