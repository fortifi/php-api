<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class OrdersOrderFidOffersEndpoint extends ApiEndpoint
{
  protected $_baseUrl = 'https://api.fortifi.io';
  protected $_basePath = '/v1';
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
    $endpoint->setApiDefinition($this->getApiDefinition());
    $endpoint->setConnection($this->_getConnection());
    return $endpoint;
  }

  /**
   * @summary Add an offer to an order
   *
   * @param $offerFid
   *
   * @return ApiRequest
   */
  public function create($offerFid)
  {
    $request = new ApiRequest();
    $request->setConnection($this->_getConnection());
    $detail = new ApiRequestDetail();
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'orders/{orderFid}/offers'
      )
    ));
    $detail->addPostField('offerFid', $offerFid);
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
