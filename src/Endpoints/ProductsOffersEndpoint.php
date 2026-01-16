<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ProductOffersRequest;
use Fortifi\Api\V1\Requests\ProductOfferRequest;
use Fortifi\Api\V1\Payloads\CreateProductOfferPayload;
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
   * @param $offerFid
   *
   * @return ProductsOffersOfferFidEndpoint
   */
  public function with($offerFid)
  {
    $endpoint = new ProductsOffersOfferFidEndpoint(
      $offerFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
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

  /**
   * @summary Create a new offer
   *
   * @param CreateProductOfferPayload $payload
   *
   * @return ProductOfferRequest
   */
  public function create(CreateProductOfferPayload $payload)
  {
    $request = new ProductOfferRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('products/offers'));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
