<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiRequest;
use Fortifi\Api\Core\ApiEndpoint;

class OrdersOrderFidOffersOfferFidEndpoint extends ApiEndpoint
{
  protected $_baseUrl = 'https://api.fortifi.io';
  protected $_basePath = '/v1';
  protected $_path = 'orders/{orderFid}/offers/{offerFid}';
  protected $_replacements = [];

  public function __construct($orderFid, $offerFid)
  {
    $this->_replacements['{orderFid}'] = $orderFid;
    $this->_replacements['{offerFid}'] = $offerFid;
  }

  /**
   * @summary Remove an offer from an order
   *
   * @return ApiRequest
   */
  public function delete()
  {
    $request = new ApiRequest();
    $request->setConnection($this->_getConnection());
    $detail = new ApiRequestDetail();
    $detail->setUrl($this->_buildUrl(
      str_replace(
        array_keys($this->_replacements),
        array_values($this->_replacements),
        'orders/{orderFid}/offers/{offerFid}'
      )
    ));
    $detail->setMethod('DELETE');
    $request->setRequestDetail($detail);
    return $request;
  }
}
