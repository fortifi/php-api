<?php
namespace Fortifi\Api\V1\Endpoints;

use Fortifi\Api\V1\Requests\AuthTokenResponseRequest;
use Fortifi\Api\V1\Payloads\ServiceAccountCredentialsPayload;
use Fortifi\Api\Core\ApiRequestDetail;
use Fortifi\Api\Core\ApiEndpoint;

class SvcauthEndpoint extends ApiEndpoint
{
  protected $_path = 'svcauth';
  protected $_replacements = [];

  public function __construct()
  {
  }

  /**
   * @summary Verify service account / Get Access Token
   *
   * User service account credentials to retrieve an API token
   *
   * @param ServiceAccountCredentialsPayload $payload
   *
   * @return AuthTokenResponseRequest
   */
  public function createVerify(ServiceAccountCredentialsPayload $payload)
  {
    $request = new AuthTokenResponseRequest();
    $request->setConnection($this->_getConnection());
    $request->setEndpoint($this);

    $detail = new ApiRequestDetail();
    $detail->setRequireAuth(false);
    $detail->setUrl($this->_buildUrl('svcauth/verify'));
    $detail->setBody(json_encode($payload));
    $detail->setMethod('POST');
    $request->setRequestDetail($detail);
    return $request;
  }
}
