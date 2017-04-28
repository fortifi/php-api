<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\PubKeyRequest;
use Fortifi\Api\V1\Requests\CoinbaseCheckoutRequest;
use Fortifi\Api\V1\Requests\StripeCheckoutRequest;
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
   * @summary Get the public key needed to encrypt a credit card number
   *
   * @param $format
   *
   * @return PubKeyRequest
   */
  public function publicKey($format = null)
  {
    $request = new PubKeyRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('pay/publicKey'));
    $detail->addQueryField('format', $format);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
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

  /**
   * @summary Get a new checkout ID
   *
   * @param $orderFID
   *
   * @return StripeCheckoutRequest
   */
  public function stripe($orderFID = null)
  {
    $request = new StripeCheckoutRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(true);
    $detail->setUrl($this->_buildUrl('pay/stripe'));
    $detail->addQueryField('orderFID', $orderFID);
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
