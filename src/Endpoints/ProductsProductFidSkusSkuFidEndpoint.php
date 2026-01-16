<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ProductSkuRequest;
use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\V1\Payloads\UpdateProductSkuPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class ProductsProductFidSkusSkuFidEndpoint extends ApiEndpoint
{
  protected $_path = 'products/{productFid}/skus/{skuFid}';
  protected $_replacements = [];

  public function __construct($productFid, $skuFid)
  {
    $this->_replacements['{productFid}'] = $productFid;
    $this->_replacements['{skuFid}'] = $skuFid;
  }

  /**
   * @summary Retrieve Product SKU Details
   *
   * @return ProductSkuRequest
   */
  public function retrieve()
  {
    $request = new ProductSkuRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'products/{productFid}/skus/{skuFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Update Product SKU Details
   *
   * @param UpdateProductSkuPayload $payload
   *
   * @return BoolMessageRequest
   */
  public function update(UpdateProductSkuPayload $payload)
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
        'products/{productFid}/skus/{skuFid}'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
