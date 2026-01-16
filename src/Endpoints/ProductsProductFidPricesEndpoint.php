<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ProductPricesRequest;
use Fortifi\Api\V1\Requests\ProductPriceRequest;
use Fortifi\Api\V1\Payloads\CreateProductPricePayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class ProductsProductFidPricesEndpoint extends ApiEndpoint
{
  protected $_path = 'products/{productFid}/prices';
  protected $_replacements = [];

  public function __construct($productFid)
  {
    $this->_replacements['{productFid}'] = $productFid;
  }

  /**
   * @param $priceFid
   *
   * @return ProductsProductFidPricesPriceFidEndpoint
   */
  public function with($priceFid)
  {
    $endpoint = new ProductsProductFidPricesPriceFidEndpoint(
      $this->_replacements['{productFid}'],
      $priceFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Retrieve Product Prices
   *
   * @param $currency
   *
   * @return ProductPricesRequest
   */
  public function all($currency = null)
  {
    $request = new ProductPricesRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'products/{productFid}/prices'
      )
    ));
    $detail->addQueryField('currency', $currency);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Create a new Product Price
   *
   * @param CreateProductPricePayload $payload
   *
   * @return ProductPriceRequest
   */
  public function create(CreateProductPricePayload $payload)
  {
    $request = new ProductPriceRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'products/{productFid}/prices'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
