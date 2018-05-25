<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ProductOffersRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class ProductsOffersEndpoint extends ApiEndpoint
{
  protected $_path = 'products/offers';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @summary Retrieve all offers
   *
   * @return ProductOffersRequest
   */
  public function all()
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
