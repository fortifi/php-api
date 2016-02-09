<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class OrdersOrderFidOffersEndpoint extends ApiEndpoint
{
  protected $_path = 'orders/{orderFid}/offers';
  protected $_replacements = [];

  public function __construct($orderFid)
  {
    $this->_replacements['{orderFid}'] = $orderFid;
  }

  /**
   * @param $offerFid
   *
   * @return OrdersOrderFidOffersOfferFidEndpoint
   */
  public function with($offerFid)
  {
    $endpoint = new OrdersOrderFidOffersOfferFidEndpoint(
      $this->_replacements['{orderFid}'],
      $offerFid
    );
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Add an offer to an order
   *
   * @param $offerFid
   * @param $productFid
   * @param $orderItemFid
   * @param $replace
   *
   * @return ApiRequest
   */
  public function create($offerFid, $productFid = null, $orderItemFid = null, $replace = null)
  {
    $request = new ApiRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'orders/{orderFid}/offers'
      )
    ));
    $detail->addPostField('offerFid', $offerFid);
    $detail->addPostField('productFid', $productFid);
    $detail->addPostField('orderItemFid', $orderItemFid);
    $detail->addPostField('replace', $replace);
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
