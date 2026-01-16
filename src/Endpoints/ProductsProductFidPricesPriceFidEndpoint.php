<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ProductPriceRequest;
use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\V1\Payloads\UpdateProductPricePayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class ProductsProductFidPricesPriceFidEndpoint extends ApiEndpoint
{
  protected $_path = 'products/{productFid}/prices/{priceFid}';
  protected $_replacements = [];

  public function __construct($productFid, $priceFid)
  {
    $this->_replacements['{productFid}'] = $productFid;
    $this->_replacements['{priceFid}'] = $priceFid;
  }

  /**
   * @summary Retrieve Product Price Details
   *
   * @return ProductPriceRequest
   */
  public function retrieve()
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
        'products/{productFid}/prices/{priceFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Update Product Price Details
   *
   * @param UpdateProductPricePayload $payload
   *
   * @return BoolMessageRequest
   */
  public function update(UpdateProductPricePayload $payload)
  {
    $request = new BoolMessageRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'products/{productFid}/prices/{priceFid}'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
