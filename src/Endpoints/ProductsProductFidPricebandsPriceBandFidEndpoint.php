<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ProductPriceBandRequest;
use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\V1\Payloads\UpdateProductPriceBandPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class ProductsProductFidPricebandsPriceBandFidEndpoint extends ApiEndpoint
{
  protected $_path = 'products/{productFid}/pricebands/{priceBandFid}';
  protected $_replacements = [];

  public function __construct($productFid, $priceBandFid)
  {
    $this->_replacements['{productFid}'] = $productFid;
    $this->_replacements['{priceBandFid}'] = $priceBandFid;
  }

  /**
   * @summary Retrieve Product Price Band Details
   *
   * @return ProductPriceBandRequest
   */
  public function retrieve()
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
        'products/{productFid}/pricebands/{priceBandFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Update Product Price Band Details
   *
   * @param UpdateProductPriceBandPayload $payload
   *
   * @return BoolMessageRequest
   */
  public function update(UpdateProductPriceBandPayload $payload)
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
        'products/{productFid}/pricebands/{priceBandFid}'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
