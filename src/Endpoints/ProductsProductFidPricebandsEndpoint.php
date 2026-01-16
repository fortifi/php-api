<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ProductPriceBandsRequest;
use Fortifi\Api\V1\Requests\ProductPriceBandRequest;
use Fortifi\Api\V1\Payloads\CreateProductPriceBandPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class ProductsProductFidPricebandsEndpoint extends ApiEndpoint
{
  protected $_path = 'products/{productFid}/pricebands';
  protected $_replacements = [];

  public function __construct($productFid)
  {
    $this->_replacements['{productFid}'] = $productFid;
  }

  /**
   * @param $priceBandFid
   *
   * @return ProductsProductFidPricebandsPriceBandFidEndpoint
   */
  public function with($priceBandFid)
  {
    $endpoint = new ProductsProductFidPricebandsPriceBandFidEndpoint(
      $this->_replacements['{productFid}'],
      $priceBandFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Retrieve Product Price Bands
   *
   * @param $currency
   *
   * @return ProductPriceBandsRequest
   */
  public function all($currency = null)
  {
    $request = new ProductPriceBandsRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'products/{productFid}/pricebands'
      )
    ));
    $detail->addQueryField('currency', $currency);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Create a new Product Price Band
   *
   * @param CreateProductPriceBandPayload $payload
   *
   * @return ProductPriceBandRequest
   */
  public function create(CreateProductPriceBandPayload $payload)
  {
    $request = new ProductPriceBandRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'products/{productFid}/pricebands'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
