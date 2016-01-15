<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\PubKeyRequest;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class PayEndpoint extends ApiEndpoint
{
  protected $_baseUrl = 'https://api.fortifi.io';
  protected $_basePath = '/v1';
  protected $_path = 'pay';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @summary Get the public key needed to encrypt a credit card number
   *
   * @return PubKeyRequest
   */
  public function publicKey()
  {
    $request = new PubKeyRequest();
    $request->setConnection($this->_getConnection());
    $detail = new ApiRequestDetail();
    $detail->setUrl($this->_buildUrl('pay/publicKey'));
    $detail->setMethod('GET');
    $request->setRequestDetail($detail);
    return $request;
  }
}
