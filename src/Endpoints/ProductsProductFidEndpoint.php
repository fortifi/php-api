<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ProductRequest;
use Fortifi\Api\Core\ApiRequestDetail;
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
   * @return ProductsProductFidAvailabilityEndpoint
   */
  public function availability()
  {
    $endpoint = new ProductsProductFidAvailabilityEndpoint(
      $this->_replacements['{productFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
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

  /**
   * @return ProductsProductFidPricebandsEndpoint
   */
  public function pricebands()
  {
    $endpoint = new ProductsProductFidPricebandsEndpoint(
      $this->_replacements['{productFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @return ProductsProductFidSkusEndpoint
   */
  public function skus()
  {
    $endpoint = new ProductsProductFidSkusEndpoint(
      $this->_replacements['{productFid}']
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Retrieve Product Details
   *
   * @return ProductRequest
   */
  public function retrieve()
  {
    $request = new ProductRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'products/{productFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
