<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\PubKeyRequest;
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
}
