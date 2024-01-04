<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ProductPricesRequest;
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
}
