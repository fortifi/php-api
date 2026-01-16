<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\ProductOfferRequest;
use Fortifi\Api\V1\Requests\BoolMessageRequest;
use Fortifi\Api\V1\Payloads\UpdateProductOfferPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class ProductsOffersOfferFidEndpoint extends ApiEndpoint
{
  protected $_path = 'products/offers/{offerFid}';
  protected $_replacements = [];

  public function __construct($offerFid)
  {
    $this->_replacements['{offerFid}'] = $offerFid;
  }

  /**
   * @summary Retrieve Offer Details
   *
   * @return ProductOfferRequest
   */
  public function retrieve()
  {
    $request = new ProductOfferRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'products/offers/{offerFid}'
      )
    ));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }

  /**
   * @summary Update Offer Details
   *
   * @param UpdateProductOfferPayload $payload
   *
   * @return BoolMessageRequest
   */
  public function update(UpdateProductOfferPayload $payload)
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
        'products/offers/{offerFid}'
      )
    ));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('PUT');
    $request->setRequestDetail($detail);
    return $request;
  }
}
