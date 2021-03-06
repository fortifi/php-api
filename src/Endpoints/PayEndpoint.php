<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\CoinbaseCheckoutRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class PayEndpoint extends ApiEndpoint
{
  protected $_path = 'pay';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @return PayPublicKeyEndpoint
   */
  public function publicKey()
  {
    $endpoint = new PayPublicKeyEndpoint();
    $endpoint->_buildFromEndpoint($this);
    return $endpoint;
  }

  /**
   * @summary Get a new checkout ID
   *
   * @param $orderFID
   *
   * @return CoinbaseCheckoutRequest
   */
  public function coinbase($orderFID = null)
  {
    $request = new CoinbaseCheckoutRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('pay/coinbase'));
    $detail->addQueryField('orderFID', $orderFID);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
