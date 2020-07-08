<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ProductSkusRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class ProductsProductFidSkusEndpoint extends ApiEndpoint
{
  protected $_path = 'products/{productFid}/skus';
  protected $_replacements = [];

  public function __construct($productFid)
  {
    $this->_replacements['{productFid}'] = $productFid;
  }

  /**
   * @summary Retrieve Product SKUs
   *
   * @return ProductSkusRequest
   */
  public function all()
  {
    $request = new ProductSkusRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'products/{productFid}/skus'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
